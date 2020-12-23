<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{
    //
	public function frontend(Request $req)
	{
        return view('frontend.pages.alumni', [
            'data' => Posting::where('posting_jenis', 'Alumni')->first()
        ]);
    }

	public function index(Request $req)
	{
        return view('backend.pages.alumni.index', [
            'data' => Posting::where('posting_jenis', 'Alumni')->first()
        ]);
    }

	public function simpan(Request $req)
	{
        DB::transaction(function () use ($req) {
            Posting::where('posting_jenis', 'Alumni')->delete();
            $data = new Posting();
            $data->posting_isi = $req->posting_isi;
            $data->posting_judul = 'Alumni';
            $data->posting_jenis = 'Alumni';
            $data->operator = auth()->user()->pengguna_nama;
            $data->save();
        });
        return redirect()->back();
    }
}
