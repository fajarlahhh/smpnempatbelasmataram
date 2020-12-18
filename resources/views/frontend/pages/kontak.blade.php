@extends('frontend.pages.main')

@section('subcontent')
<div role="main" class="main">
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $data->kontak_gambar }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-8">
                <h4 class="heading-primary mt-lg">SMPN 14 <strong>Mataram</strong></h4>
                {!! $data->kontak_uraian !!}
                <hr>

                <h4 class="heading-primary">Alamat <strong>Sekolah</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-map-marker"></i> <strong>Alamat:</strong> {{ $data->kontak_alamat }}</li>
                    <li><i class="fa fa-phone"></i> <strong>Telp. Sekolah:</strong> {{ $data->kontak_telp }}</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> {{ $data->kontak_email }}</li>
                </ul>

                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
