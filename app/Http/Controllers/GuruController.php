<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    //
    public function frontend(Request $req)
    {
        return view('frontend.pages.guru', [
            'data' => Mapel::with('guru')->orderBy('mapel_nama')->get()
        ]);
    }

    public function index(Request $req)
	{
        $data = Guru::with('mapel')->where(function($q) use ($req){
            $q->where('guru_nama', 'like', '%'.$req->cari.'%');
        })->paginate(10);
        $data->appends([$req->cari]);
        return view('backend.pages.guru.index', [
            'data' => $data,
            'i' => ($req->input('page', 1) - 1) * 10,
            'cari' => $req->cari,
        ]);
    }

	public function tambah(Request $req)
	{
        return view('backend.pages.guru.form', [
            'back' => url()->previous(),
            'mapel' => Mapel::orderBy('mapel_nama')->get(),
            'aksi' => 'Tambah'
        ]);
    }

	public function simpan(Request $req)
	{
        $req->validate([
            'guru_nama' => 'required'
        ]);

        try{
            $data = new Guru();
            $file = $req->file('guru_gambar');
            if($file){
                $ext = $file->getClientOriginalExtension();
                $nama_file = time().Str::random().".".$ext;
                $file->move(public_path('uploads/guru'), $nama_file);
                $data->guru_gambar = '/uploads/guru/'.$nama_file;
            }

            $data->guru_nama = $req->get('guru_nama');
            $data->mapel_id = $req->get('mapel_id');
            $data->save();
            return redirect('admin-area/tenagapendidik');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }

	public function hapus(Request $req)
	{
		try{
            $data = Guru::findOrFail($req->get('id'));
            File::delete(public_path($data->guru_gambar));
            $data->delete();
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menghapus Data. '.$e->getMessage());
		}
	}
}
