@extends('frontend.pages.main')

@section('subcontent')
<div role="main" class="main">
    <p></p>
    <div class="container">
        <h2>Ekstrakurikuler <strong>Sekolah</strong></h2>
        <hr>
        <div class="row">
            @foreach ($data as $row)
            <div class="col-md-3 col-sm-6 col-xs-12 isotope-item akademik">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                    <span class="thumb-info-wrapper">
                        <img src="{{ $row->ekskul_gambar }}" class="img-responsive" alt="">
                        <span class="thumb-info-title">
                            <span class="thumb-info-inner">{{ $row->ekskul_nama }}</span>
                            <span class="thumb-info-type">Ekstrakurikuler</span>
                        </span>
                    </span>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">{!! $row->ekskul_uraian !!}</span>
                    </span>
                </span>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
