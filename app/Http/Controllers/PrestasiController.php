<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrestasiController extends Controller
{
    //
    public function frontend(Request $req)
    {
        return view('frontend.pages.prestasi', [
            'data' => Prestasi::orderBy('prestasi_id')->get(),
            'kategori' => ['Akademik', 'Non Akademik']
        ]);
    }

    public function index(Request $req)
	{
        $data = Prestasi::where(function($q) use ($req){
            $q->where('prestasi_nama', 'like', '%'.$req->cari.'%');
        })->paginate(10);
        $data->appends([$req->cari]);
        return view('backend.pages.prestasi.index', [
            'data' => $data,
            'i' => ($req->input('page', 1) - 1) * 10,
            'cari' => $req->cari,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.prestasi.form', [
            'back' => Str::contains(url()->previous(), ['admin-area/prestasi/tambah', 'admin-area/prestasi/edit'])? '/admin-area/prestasi': url()->previous(),
            'aksi' => 'Tambah',
            'kategori' => ['Akademik', 'Non Akademik']
        ]);
    }

	public function simpan(Request $req)
	{
        $req->validate([
            'prestasi_nama' => 'required'
        ]);

        try{
            $file = $req->file('prestasi_gambar');

            $ext = $file->getClientOriginalExtension();
            $nama_file = time().Str::random().".".$ext;
            $file->move(public_path('uploads/prestasi'), $nama_file);

            $data = new Prestasi();
            $data->prestasi_nama = $req->get('prestasi_nama');
            $data->prestasi_tingkat = $req->get('prestasi_tingkat');
            $data->prestasi_kategori = $req->get('prestasi_kategori');
            $data->prestasi_uraian = $req->get('prestasi_uraian');
            $data->prestasi_gambar = '/uploads/prestasi/'.$nama_file;
            $data->save();
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/prestasi');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }

	public function hapus(Request $req)
	{
		try{
            $data = Prestasi::findOrFail($req->get('id'));
            File::delete(public_path($data->prestasi_gambar));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
