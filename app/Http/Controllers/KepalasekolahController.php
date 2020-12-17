<?php

namespace App\Http\Controllers;

use App\Models\KepalaSekolah;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KepalasekolahController extends Controller
{
    //
	public function index(Request $req)
	{
        return view('backend.pages.kepalasekolah.index', [
            'data' => KepalaSekolah::first()
        ]);
    }

	public function simpan(Request $req)
	{
        try{
            $lama = KepalaSekolah::first();
            $data = new KepalaSekolah();
            if($req->file('kepala_sekolah_gambar')){
                if ($lama) {
                    File::delete(public_path($lama->kepala_sekolah_gambar));
                }
                $file = $req->file('kepala_sekolah_gambar');
                $ext = $file->getClientOriginalExtension();
                $nama_file = time().Str::random().".".$ext;
                $file->move(public_path('uploads/kepala_sekolah'), $nama_file);
                $data->kepala_sekolah_gambar = '/uploads/kepala_sekolah/'.$nama_file;
            }else{
                $data->kepala_sekolah_gambar = $lama->kepala_sekolah_gambar;
            }
            if ($lama) {
                $lama->delete();
            }

            $data->kepala_sekolah_pengantar = $req->get('kepala_sekolah_pengantar');
            $data->kepala_sekolah_data = $req->get('kepala_sekolah_data');
            $data->kepala_sekolah_selogan = $req->get('kepala_sekolah_selogan');
            $data->kepala_sekolah_nama = $req->get('kepala_sekolah_nama');
            $data->save();
            return redirect('admin-area/kepalasekolah');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
}
