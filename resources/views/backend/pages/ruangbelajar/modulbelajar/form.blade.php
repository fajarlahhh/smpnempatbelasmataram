@extends('backend.pages.main')

@section('title', ' | '.$aksi.' Modul Belajar')

@push('css')
<link rel="stylesheet" href="/assets/backend/plugins/summernote/summernote-bs4.css">
@endpush

@section('page')
<li class="breadcrumb-item">Ruang Belajar</li>
<li class="breadcrumb-item">Modul Belajar</li>
<li class="breadcrumb-item active">{{ $aksi }} Modul Belajar</li>
@endsection

@section('header')
<h1 class="m-0 text-dark">{{ $aksi }} Modul Belajar</h1>
@endsection

@section('subcontent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('modulbelajar.simpan') }}" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <input type="hidden" name="redirect" value="{{ $back }}">
                            <div class="row">
                                <input type="hidden" name="posting_jenis" value="modulbelajar">
                                @if($aksi == 'Edit')
                                <input type="hidden" name="ID" value="{{ $data->posting_id }}">
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Judul Modul Belajar</label>
                                        <input class="form-control" type="text" name="posting_judul" value="{{ old('posting_judul')? old('posting_judul'): ($aksi == "Edit"? $data->posting_judul: "") }}" autocomplete="off" id="posting_judul" data-parsley-minlength="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Isi Modul Belajar</label>
                                        <textarea class="textarea" name="posting_uraian">{{ old('posting_uraian')? old('posting_uraian'): ($aksi == "Edit"? $data->posting_uraian: "") }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="control-label">Kelas</label>
                                        <select class="form-control selectpicker" name="posting_kriteria" data-live-search="true" data-style="btn-aqua" data-size="3" data-width="100%">
                                            @foreach($kelas as $row)
                                            @php
                                                $selected = '';
                                                if(old('posting_kriteria') == $row){
                                                    $selected =  'selected';
                                                }
                                            @endphp
                                            <option value="{{ $row }}" {{ $selected }}>{{ $row }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">File Upload</label>
                                        <input class="form-control" type="file" name="posting_file" accept="application/pdf"autocomplete="off" />
                                    </div>
                                    @if ($aksi == 'Edit')
                                    <a href="{{ $data->posting_file }}" target="_blank">File Lama</a>
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
@push('scripts')
<script src="/assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function () {
        $('.textarea').summernote({
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
        })
    })
</script>
@endpush
