<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisimisiController extends Controller
{
    //
	public function index(Request $req)
	{
        return view('backend.pages.visimisi.index', [
            'data' => Posting::where('posting_jenis', 'Visi Misi')->first()
        ]);
    }


	public function simpan(Request $req)
	{
        DB::transaction(function () use ($req) {
            Posting::where('posting_jenis', 'Visi Misi')->delete();
            $data = new Posting();
            $data->posting_isi = $req->posting_isi;
            $data->posting_judul = 'Visi Misi';
            $data->posting_jenis = 'Visi Misi';
            $data->operator = auth()->user()->pengguna_nama;
            $data->save();
        });
        return redirect()->back();
    }
}
