@extends('frontend.pages.main')

@section('subcontent')
<div role="main" class="main">
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts">
                    <div class="text-center">
                        <h2>{{ $data->kegiatan_judul }}</h2>
                        <img src="{{ $data->kegiatan_gambar }}" alt="" >
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> {{ date('d F Y', strtotime($data->created_at)) }} </span>
                            <span><i class="fa fa-user"></i> Oleh <a href="#">{{ $data->operator }}</a> </span>
                        </div>
                    </div>
                    {!! $data->kegiatan_isi !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
