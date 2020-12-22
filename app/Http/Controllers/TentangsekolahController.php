<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangsekolahController extends Controller
{
    //
	public function frontend(Request $req)
	{
        return view('frontend.pages.tentangsekolah', [
            'data' => Posting::where('posting_jenis', 'Tentang Sekolah')->first()
        ]);
    }

	public function index(Request $req)
	{
        return view('backend.pages.tentangsekolah.index', [
            'data' => Posting::where('posting_jenis', 'Tentang Sekolah')->first()
        ]);
    }

	public function simpan(Request $req)
	{
        DB::transaction(function () use ($req) {
            Posting::where('posting_jenis', 'Tentang Sekolah')->delete();
            $data = new Posting();
            $data->posting_isi = $req->posting_isi;
            $data->posting_judul = 'Tentang Sekolah';
            $data->posting_jenis = 'Tentang Sekolah';
            $data->operator = auth()->user()->pengguna_nama;
            $data->save();
        });
        return redirect()->back();
    }
}
