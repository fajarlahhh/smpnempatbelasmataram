<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use App\Models\Carousel;
use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Models\KepalaSekolah;

class DashboardController extends Controller
{
    //
    public function index(Request $req)
    {
        return view('backend.pages.dashboard.index');
    }

    public function frontend(Request $req)
    {
        return view('frontend.pages.beranda', [
            'kepalasekolah' => KepalaSekolah::first(),
            'carousel' => Carousel::all(),
            'visimisi' => Posting::where('posting_jenis', 'Visi Misi')->first(),
            'informasi' => Informasi::all(),
        ]);
    }
}
