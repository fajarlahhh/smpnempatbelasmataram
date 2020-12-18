<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KegiatanController extends Controller
{
    //
    public function frontend(Request $req)
    {
        if ($req->id) {
            return view('frontend.pages.baca', [
                'data' => Kegiatan::where('kegiatan_id', $req->id)->first()
            ]);
        }else{
            return view('frontend.pages.kegiatan', [
                'data' => Kegiatan::orderBy('kegiatan_id')->paginate(4)
            ]);
        }
    }

    public function index(Request $req)
	{
        $data = Kegiatan::where(function($q) use ($req){
            $q->where('kegiatan_judul', 'like', '%'.$req->cari.'%');
        })->paginate(10);
        $data->appends([$req->cari]);
        return view('backend.pages.kegiatan.index', [
            'data' => $data,
            'i' => ($req->input('page', 1) - 1) * 10,
            'cari' => $req->cari,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.kegiatan.form', [
            'data' => null,
            'back' => Str::contains(url()->previous(), ['admin-area/kegiatan/tambah', 'admin-area/kegiatan/edit'])? '/admin-area/kegiatan': url()->previous(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        $req->validate([
            'kegiatan_judul' => 'required'
        ]);

        try{
            if ($req->get('ID')) {
                $data = Kegiatan::findOrFail($req->get('ID'));
                $data->kegiatan_judul = $req->get('kegiatan_judul');
                $data->kegiatan_isi = $req->get('kegiatan_isi');
                $data->operator = auth()->user()->pengguna_nama;
                if($req->file('kegiatan_gambar')){
                    File::delete(public_path($data->kegiatan_gambar));
                    $file = $req->file('kegiatan_gambar');

                    $ext = $file->getClientOriginalExtension();
                    $nama_file = time().Str::random().".".$ext;
                    $file->move(public_path('uploads/kegiatan'), $nama_file);
                    $data->kegiatan_gambar = '/uploads/kegiatan/'.$nama_file;
                }

                $data->save();
            }else{
                $file = $req->file('kegiatan_gambar');

                $ext = $file->getClientOriginalExtension();
                $nama_file = time().Str::random().".".$ext;
                $file->move(public_path('uploads/kegiatan'), $nama_file);

                $data = new Kegiatan();
                $data->kegiatan_judul = $req->get('kegiatan_judul');
                $data->kegiatan_isi = $req->get('kegiatan_isi');
                $data->kegiatan_gambar = '/uploads/kegiatan/'.$nama_file;
                $data->operator = auth()->user()->pengguna_nama;
                $data->save();
            }
            return redirect($req->get('redirect')? $req->get('redirect'): 'admin-area/kegiatan');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }

	public function edit(Request $req)
	{
        return view('backend.pages.kegiatan.form', [
            'data' => Kegiatan::findOrFail($req->get('id')),
            'back' => Str::contains(url()->previous(), ['admin-area/kegiatan/tambah', 'admin-area/kegiatan/edit'])? '/admin-area/kegiatan': url()->previous(),
            'aksi' => 'Edit'
        ]);
    }

	public function hapus(Request $req)
	{
		try{
            $data = Kegiatan::findOrFail($req->get('id'));
            File::delete(public_path($data->kegiatan_gambar));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
