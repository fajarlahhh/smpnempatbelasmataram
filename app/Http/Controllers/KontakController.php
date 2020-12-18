<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class KontakController extends Controller
{
    //
    public function frontend(Request $req)
	{
        return view('frontend.pages.kontak', [
            'data' => Kontak::first()
        ]);
    }

    public function index(Request $req)
	{
        return view('backend.pages.kontak.index', [
            'data' => Kontak::first()
        ]);
    }

	public function simpan(Request $req)
	{
        try{
            $lama = Kontak::first();
            $data = new Kontak();
            if($req->file('kontak_gambar')){
                if ($lama) {
                    File::delete(public_path($lama->kontak_gambar));
                }
                $file = $req->file('kontak_gambar');
                $ext = $file->getClientOriginalExtension();
                $nama_file = time().Str::random().".".$ext;
                $file->move(public_path('uploads/kontak'), $nama_file);
                $data->kontak_gambar = '/uploads/kontak/'.$nama_file;
            }else{
                $data->kontak_gambar = $lama->kontak_gambar;
            }
            if ($lama) {
                $lama->delete();
            }

            $data->kontak_uraian = $req->get('kontak_uraian');
            $data->kontak_alamat = $req->get('kontak_alamat');
            $data->kontak_telp = $req->get('kontak_telp');
            $data->kontak_email = $req->get('kontak_email');
            $data->kontak_kota = $req->get('kontak_kota');
            $data->save();
            return redirect('admin-area/kontak');
		}catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors('Gagal Menyimpan Data. '.$e->getMessage());
        }
    }
}
