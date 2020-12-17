<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EkskulController extends Controller
{
    //
    public function frontend(Request $req)
    {
        return view('frontend.pages.ekskul', [
            'data' => Ekskul::orderBy('ekskul_nama')->get()
        ]);
    }

    public function index(Request $req)
	{
        $data = Ekskul::where(function($q) use ($req){
            $q->where('ekskul_nama', 'like', '%'.$req->cari.'%');
        })->paginate(10);
        $data->appends([$req->cari]);
        return view('backend.pages.ekskul.index', [
            'data' => $data,
            'i' => ($req->input('page', 1) - 1) * 10,
            'cari' => $req->cari,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.ekskul.form', [
            'back' => url()->previous(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        $req->validate([
            'ekskul_nama' => 'required'
        ]);

        try{
            $data = new Ekskul();
            $file = $req->file('ekskul_gambar');
            if($file){
                $ext = $file->getClientOriginalExtension();
                $nama_file = time().Str::random().".".$ext;
                $file->move(public_path('uploads/ekskul'), $nama_file);
                $data->ekskul_gambar = '/uploads/ekskul/'.$nama_file;
            }

            $data->ekskul_nama = $req->get('ekskul_nama');
            $data->ekskul_uraian = $req->get('ekskul_uraian');
            $data->save();
            return redirect('admin-area/ekskul');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }

	public function hapus(Request $req)
	{
		try{
            $data = Ekskul::findOrFail($req->get('id'));
            File::delete(public_path($data->ekskul_gambar));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
