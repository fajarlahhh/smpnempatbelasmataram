@extends('backend.pages.main')

@section('title', ' | Kontak')

@push('css')
<link rel="stylesheet" href="/assets/backend/plugins/summernote/summernote-bs4.css">
@endpush

@section('page')
<li class="breadcrumb-item active">Kontak</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Kontak</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="/admin-area/kontak/simpan" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Uraian</label>
                                        <textarea class="textarea" name="kontak_uraian">{{ old('kontak_uraian')? old('kontak_uraian'): ($data ? $data->kontak_uraian: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Alamat</label>
                                        <input class="form-control" type="text" name="kontak_alamat" value="{{ old('kontak_alamat', $data? $data->kontak_alamat: '') }}" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Kota, Provinsi</label>
                                        <input class="form-control" type="text" name="kontak_kota" value="{{ old('kontak_kota', $data? $data->kontak_kota: '') }}" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Telpon</label>
                                        <input class="form-control" type="text" name="kontak_telp" value="{{ old('kontak_telp', $data? $data->kontak_telp: '') }}" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input class="form-control" type="text" name="kontak_email" value="{{ old('kontak_email', $data? $data->kontak_email: '') }}" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gambar</label>
                                        <input class="form-control" type="file" name="kontak_gambar" accept="image/x-png,image/gif,image/jpeg" autocomplete="off" />
                                    </div>
                                    @if ($data)
                                    <a href="{{ $data->posting_gambar }}" target="_blank">Gambar Lama</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer form-inline">
                            <input type="submit" value="Simpan" class="btn btn-sm btn-success"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="/assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function () {
        $('[name="kontak_uraian"]').summernote({
            height: 400,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ]
        });
    })
</script>
@endpush
