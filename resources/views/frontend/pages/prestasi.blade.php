@extends('frontend.pages.main')

@section('subcontent')
<div role="main" class="main">
    <p></p>
    <div class="container">
        <h2>Prestasi <strong>Sekolah</strong></h2>

        <ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
            <li data-option-value="*" class="active"><a href="#">Semua Prestasi</a></li>
            <li data-option-value=".akademik"><a href="#">Akademik</a></li>
            <li data-option-value=".nonakademik"><a href="#">Non Akademik</a></li>

        </ul>
        <hr>
        <div class="row">
            <div class="sort-destination-loader sort-destination-loader-showing">
                <ul class="team-list sort-destination" data-sort-id="team">
                    @foreach ($data as $row)
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item {{ $row->prestasi_kategori }}">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <img src="{{ $row->prestasi_gambar }}" class="img-responsive" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">{{ $row->prestasi_nama }}</span>
                                    <span class="thumb-info-type">{{ $row->prestasi_tingkat }}</span>
                                </span>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">{!! $row->prestasi_uraian !!}</span>
                            </span>
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
