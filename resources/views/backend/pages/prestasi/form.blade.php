@extends('backend.pages.main')

@section('title', ' | '.$aksi.' Prestasi')

@section('page')
<li class="breadcrumb-item">Prestasi</li>
<li class="breadcrumb-item active">{{ $aksi }} Prestasi</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">{{ $aksi }} Prestasi</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('prestasi.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="redirect" value="{{ $back }}">
                            <div class="row">
                                @if($aksi == 'Edit')
                                <input type="hidden" name="ID" value="{{ $data->prestasi_id }}">
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input class="form-control" type="text" name="prestasi_nama" value="{{ old('prestasi_nama')? old('prestasi_nama'): ($aksi == "Edit"? $data->prestasi_nama: "") }}" autocomplete="off" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Uraian</label>
                                        <input class="form-control" type="text" name="prestasi_uraian" value="{{ old('prestasi_uraian')? old('prestasi_uraian'): ($aksi == "Edit"? $data->prestasi_uraian: "") }}" autocomplete="off" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="control-label">Tingkat</label>
                                        <select class="form-control selectpicker" name="prestasi_tingkat" data-live-search="true" data-style="btn-aqua" data-size="3" data-width="100%">
                                            <option value="Tingkat Internasional">Tingkat Internasional</option>
                                            <option value="Tingkat Nasional">Nasional</option>
                                            <option value="Tingkat Provinsi">Tingkat Provinsi</option>
                                            <option value="Tingkat Kabupaten/Kota">Tingkat Kabupaten/Kota</option>
                                            <option value="Tingkat Kecamatan">Tingkat Kecamatan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="control-label">Kategori</label>
                                        <select class="form-control selectpicker" name="prestasi_kategori" data-live-search="true" data-style="btn-aqua" data-size="3" data-width="100%">
                                            @foreach($kategori as $row)
                                            <option value="{{ $row }}">{{ $row }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gambar</label>
                                        <input class="form-control" type="file" name="prestasi_gambar" accept="image/x-png,image/gif,image/jpeg" {{ $aksi == "Edit"? "": "required" }} autocomplete="off" />
                                    </div>
                                    @if ($aksi == 'Edit')
                                    <a href="{{ $data->prestasi_gambar }}" target="_blank">Gambar Lama</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer form-inline">
                            <input type="submit" value="Simpan" class="btn btn-sm btn-success"/>
                            &nbsp;
                            <a href="{{ $back }}" class="btn btn-sm btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
