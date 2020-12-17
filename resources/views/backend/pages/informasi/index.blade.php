@extends('backend.pages.main')

@section('title', ' | Informasi')

@section('page')
<li class="breadcrumb-item active">Informasi</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Informasi</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <form action="/admin-area/informasi/simpan" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Judul Informasi</label>
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[0][informasi_nama]" value="{{ old('data.informasi_nama.0', $data[0]->informasi_nama) }}" autocomplete="off" required />
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[1][informasi_nama]" value="{{ old('data.informasi_nama.1', $data[1]->informasi_nama) }}" autocomplete="off" required />
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[2][informasi_nama]" value="{{ old('data.informasi_nama.2', $data[2]->informasi_nama) }}" autocomplete="off" required />
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[3][informasi_nama]" value="{{ old('data.informasi_nama.3', $data[3]->informasi_nama) }}" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Jumlah</label>
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[0][informasi_jumlah]" value="{{ old('data.informasi_jumlah.0', $data[0]->informasi_jumlah) }}" autocomplete="off" required />
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[1][informasi_jumlah]" value="{{ old('data.informasi_jumlah.1', $data[1]->informasi_jumlah) }}" autocomplete="off" required />
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[2][informasi_jumlah]" value="{{ old('data.informasi_jumlah.2', $data[2]->informasi_jumlah) }}" autocomplete="off" required />
                                <input class="form-control" style="margin-bottom: 10px" type="text" name="data[3][informasi_jumlah]" value="{{ old('data.informasi_jumlah.3', $data[3]->informasi_jumlah) }}" autocomplete="off" required />
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

