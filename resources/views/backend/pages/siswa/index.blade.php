@extends('backend.pages.main')

@section('title', ' | Siswa')

@section('page')
<li class="breadcrumb-item active">Siswa</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Siswa</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <form action="/admin-area/datasiswa/simpan" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Kelas</label>
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[0][siswa_kelas]" value="Data Peserta Didik Kelas VII" autocomplete="off" required readonly/>
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[1][siswa_kelas]" value="Data Peserta Didik Kelas VII" autocomplete="off" required readonly/>
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[2][siswa_kelas]" value="Data Peserta Didik Kelas VII" autocomplete="off" required readonly/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Jumlah</label>
                                <input class="form-control" style="margin-bottom: 10px" type="number" name="data[0][siswa_jumlah]" value="{{ old('data.siswa_jumlah.0', $data[0]->siswa_jumlah) }}" autocomplete="off" required />
                                <input class="form-control" style="margin-bottom: 10px" type="number" name="data[1][siswa_jumlah]" value="{{ old('data.siswa_jumlah.1', $data[1]->siswa_jumlah) }}" autocomplete="off" required />
                                <input class="form-control" style="margin-bottom: 10px" type="number" name="data[2][siswa_jumlah]" value="{{ old('data.siswa_jumlah.2', $data[2]->siswa_jumlah) }}" autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer form-inline">
                    <input type="submit" value="Simpan" class="btn btn-sm btn-success"/>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

