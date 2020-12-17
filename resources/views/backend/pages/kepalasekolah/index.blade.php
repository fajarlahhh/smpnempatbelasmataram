@extends('backend.pages.main')

@section('title', ' | Kepala Sekolah')

@push('css')
<link rel="stylesheet" href="/assets/backend/plugins/summernote/summernote-bs4.css">
@endpush

@section('page')
<li class="breadcrumb-item">Profil</li>
<li class="breadcrumb-item active">Kepala Sekolah</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">Kepala Sekolah</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="/admin-area/kepalasekolah/simpan" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input class="form-control" type="text" name="kepala_sekolah_nama" value="{{ old('kepala_sekolah_nama', $data? $data->kepala_sekolah_nama: '') }}" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pengantar</label>
                                        <textarea class="textarea" name="kepala_sekolah_pengantar">{{ old('kepala_sekolah_pengantar')? old('kepala_sekolah_pengantar'): ($data ? $data->kepala_sekolah_pengantar: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Data Kepala Sekolah</label>
                                        <textarea class="textarea" name="kepala_sekolah_data">{{ old('kepala_sekolah_data')? old('kepala_sekolah_data'): ($data ? $data->kepala_sekolah_data: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Selogan</label>
                                        <textarea class="textarea" name="kepala_sekolah_selogan">{{ old('kepala_sekolah_selogan')? old('kepala_sekolah_selogan'): ($data ? $data->kepala_sekolah_selogan: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gambar</label>
                                        <input class="form-control" type="file" name="posting_gambar" accept="image/x-png,image/gif,image/jpeg" autocomplete="off" />
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
        $('[name="kepala_sekolah_pengantar"]').summernote({
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

        $('[name="kepala_sekolah_data"]').summernote({
            height: 200,
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

        $('[name="kepala_sekolah_selogan"]').summernote({
            height: 200,
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
