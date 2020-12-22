<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    //
    public function frontend(Request $req)
	{
        return view('frontend.pages.siswa', [
            'data' => Siswa::all()
        ]);
    }

    public function index(Request $req)
	{
        return view('backend.pages.siswa.index', [
            'data' => Siswa::all()
        ]);
    }

    public function simpan(Request $req)
	{
        DB::transaction(function () use ($req) {
            Siswa::truncate();
            $data = [];
            foreach ($req->data as $index => $detail) {
                $data[] = [
                    'siswa_kelas' => $detail['siswa_kelas'],
                    'siswa_jumlah' => $detail['siswa_jumlah']
                ];
            }
            Siswa::insert($data);
        });
        return redirect()->back();
    }
}
