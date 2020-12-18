<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\TatausahaController;
use App\Http\Controllers\PesertadidikController;
use App\Http\Controllers\RuangbelajarController;
use App\Http\Controllers\KepalasekolahController;
use App\Http\Controllers\KomitesekolahController;
use App\Http\Controllers\KategoriberitaController;
use App\Http\Controllers\SejarahsekolahController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KalenderakademikController;
use App\Http\Controllers\KategorikegiatanController;
use App\Http\Controllers\StrukturorganisasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::group(['prefix' => 'admin-area'], function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', [DashboardController::class,'index']);
        Route::get('/dashboard', [DashboardController::class,'index']);
        Route::patch('/gantisandi', [PenggunaController::class, 'ganti_sandi'])->name('gantisandi');

        Route::prefix('pengguna')->group(function () {
            Route::get('/', [PenggunaController::class, 'index'])->name('pengguna');
            Route::get('/tambah', [PenggunaController::class, 'tambah'])->name('pengguna.tambah');
            Route::get('/edit', [PenggunaController::class, 'edit'])->name('pengguna.edit');
            Route::post('/simpan', [PenggunaController::class, 'simpan'])->name('pengguna.simpan');
            Route::delete('/hapus', [PenggunaController::class, 'hapus']);
        });

        Route::prefix('kategorikegiatan')->group(function () {
            Route::get('/', [KategorikegiatanController::class, 'index'])->name('kategorikegiatan');
            Route::get('/tambah', [KategorikegiatanController::class, 'tambah'])->name('kategorikegiatan.tambah');
            Route::get('/edit', [KategorikegiatanController::class, 'edit'])->name('kategorikegiatan.edit');
            Route::post('/simpan', [KategorikegiatanController::class, 'simpan'])->name('kategorikegiatan.simpan');
            Route::delete('/hapus', [KategorikegiatanController::class, 'hapus']);
        });

        Route::prefix('kategoriberita')->group(function () {
            Route::get('/', [KategoriberitaController::class, 'index'])->name('kategoriberita');
            Route::get('/tambah', [KategoriberitaController::class, 'tambah'])->name('kategoriberita.tambah');
            Route::get('/edit', [KategoriberitaController::class, 'edit'])->name('kategoriberita.edit');
            Route::post('/simpan', [KategoriberitaController::class, 'simpan'])->name('kategoriberita.simpan');
            Route::delete('/hapus', [KategoriberitaController::class, 'hapus']);
        });

        Route::prefix('mapel')->group(function () {
            Route::get('/', [MapelController::class, 'index'])->name('mapel');
            Route::get('/tambah', [MapelController::class, 'tambah'])->name('mapel.tambah');
            Route::get('/edit', [MapelController::class, 'edit'])->name('mapel.edit');
            Route::post('/simpan', [MapelController::class, 'simpan'])->name('mapel.simpan');
            Route::delete('/hapus', [MapelController::class, 'hapus']);
        });

        Route::prefix('berita')->group(function () {
            Route::get('/', [BeritaController::class, 'index'])->name('berita');
            Route::get('/tambah', [BeritaController::class, 'tambah'])->name('berita.tambah');
            Route::get('/edit', [BeritaController::class, 'edit'])->name('berita.edit');
            Route::post('/simpan', [BeritaController::class, 'simpan'])->name('berita.simpan');
            Route::delete('/hapus', [BeritaController::class, 'hapus']);
        });

        Route::prefix('kegiatan')->group(function () {
            Route::get('/', [KegiatanController::class, 'index'])->name('kegiatan');
            Route::get('/tambah', [KegiatanController::class, 'tambah'])->name('kegiatan.tambah');
            Route::get('/edit', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
            Route::post('/simpan', [KegiatanController::class, 'simpan'])->name('kegiatan.simpan');
            Route::delete('/hapus', [KegiatanController::class, 'hapus']);
        });

        Route::prefix('pesertadidik')->group(function () {
            Route::get('/', [PesertadidikController::class, 'index'])->name('pesertadidik');
            Route::get('/tambah', [PesertadidikController::class, 'tambah'])->name('pesertadidik.tambah');
            Route::get('/edit', [PesertadidikController::class, 'edit'])->name('pesertadidik.edit');
            Route::post('/simpan', [PesertadidikController::class, 'simpan'])->name('pesertadidik.simpan');
            Route::delete('/hapus', [PesertadidikController::class, 'hapus']);
        });

        Route::prefix('carousel')->group(function () {
            Route::get('/', [CarouselController::class, 'index'])->name('carousel');
            Route::get('/tambah', [CarouselController::class, 'tambah'])->name('carousel.tambah');
            Route::post('/simpan', [CarouselController::class, 'simpan'])->name('carousel.simpan');
            Route::delete('/hapus', [CarouselController::class, 'hapus']);
        });

        Route::prefix('prestasi')->group(function () {
            Route::get('/', [PrestasiController::class, 'index'])->name('prestasi');
            Route::get('/tambah', [PrestasiController::class, 'tambah'])->name('prestasi.tambah');
            Route::post('/simpan', [PrestasiController::class, 'simpan'])->name('prestasi.simpan');
            Route::delete('/hapus', [PrestasiController::class, 'hapus']);
        });

        Route::prefix('gallery')->group(function () {
            Route::get('/', [GalleryController::class, 'index'])->name('gallery');
            Route::get('/tambah', [GalleryController::class, 'tambah'])->name('gallery.tambah');
            Route::post('/simpan', [GalleryController::class, 'simpan'])->name('gallery.simpan');
            Route::delete('/hapus', [GalleryController::class, 'hapus']);
        });

        Route::prefix('tenagapendidik')->group(function () {
            Route::get('/', [GuruController::class, 'index'])->name('tenagapendidik');
            Route::get('/tambah', [GuruController::class, 'tambah'])->name('tenagapendidik.tambah');
            Route::post('/simpan', [GuruController::class, 'simpan'])->name('tenagapendidik.simpan');
            Route::delete('/hapus', [GuruController::class, 'hapus']);
        });

        Route::prefix('visimisi')->group(function () {
            Route::get('/', [VisimisiController::class, 'index'])->name('visimisi');
            Route::post('/simpan', [VisimisiController::class, 'simpan'])->name('visimisi.simpan');
        });

        Route::prefix('kepalasekolah')->group(function () {
            Route::get('/', [KepalasekolahController::class, 'index'])->name('kepalasekolah');
            Route::post('/simpan', [KepalasekolahController::class, 'simpan'])->name('kepalasekolah.simpan');
        });

        Route::prefix('komitesekolah')->group(function () {
            Route::get('/', [KomitesekolahController::class, 'index'])->name('komitesekolah');
            Route::post('/simpan', [KomitesekolahController::class, 'simpan'])->name('komitesekolah.simpan');
        });

        Route::prefix('kontak')->group(function () {
            Route::get('/', [KontakController::class, 'index'])->name('kontak');
            Route::post('/simpan', [KontakController::class, 'simpan'])->name('kontak.simpan');
        });

        Route::prefix('informasi')->group(function () {
            Route::get('/', [InformasiController::class, 'index'])->name('informasi');
            Route::post('/simpan', [InformasiController::class, 'simpan'])->name('informasi.simpan');
        });

        Route::prefix('ekskul')->group(function () {
            Route::get('/', [EkskulController::class, 'index'])->name('ekskul');
            Route::get('/tambah', [EkskulController::class, 'tambah'])->name('ekskul.tambah');
            Route::post('/simpan', [EkskulController::class, 'simpan'])->name('ekskul.simpan');
            Route::delete('/hapus', [EkskulController::class, 'hapus']);
        });
    });
});

Route::get('/', [DashboardController::class, 'frontend']);
Route::get('/ekskul', [EkskulController::class, 'frontend']);
Route::get('/prestasi', [PrestasiController::class, 'frontend']);
Route::get('/kontak', [KontakController::class, 'frontend']);
Route::get('/guru', [GuruController::class, 'frontend']);
Route::get('/kegiatan', [KegiatanController::class, 'frontend']);
