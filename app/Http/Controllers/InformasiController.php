<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InformasiController extends Controller
{
    //
    public function index(Request $req)
	{
        return view('backend.pages.informasi.index', [
            'data' => Informasi::all()
        ]);
    }

    public function simpan(Request $req)
	{
        DB::transaction(function () use ($req) {
            Informasi::truncate();
            $data = [];
            foreach ($req->data as $index => $detail) {
                $data[] = [
                    'informasi_nama' => $detail['informasi_nama'],
                    'informasi_jumlah' => $detail['informasi_jumlah']
                ];
            }
            Informasi::insert($data);
        });
        return redirect()->back();
    }
}
