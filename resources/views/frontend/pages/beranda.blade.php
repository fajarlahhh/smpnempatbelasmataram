@extends('frontend.pages.main')

@section('subcontent')

<div class="slider-container light rev_slider_wrapper">
    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on'}">
        <ul>
            @foreach ($carousel as $index => $row)
            <li data-transition="fade">

                <img src="{{ $row->carousel_gambar }}"
                    alt=""
                    data-bgposition="center center"
                    data-bgfit="cover"
                    data-bgrepeat="no-repeat"
                    data-kenburns="on"
                    data-duration="9000"
                    data-ease="Linear.easeNone"
                    data-scalestart="150"
                    data-scaleend="100"
                    data-rotatestart="0"
                    data-rotateend="0"
                    data-offsetstart="0 0"
                    data-offsetend="0 0"
                    data-bgparallax="0"
                    class="rev-slidebg">

                <div class="tp-caption"
                    data-x="177"
                    data-y="188"
                    data-start="1000"
                    data-transform_in="x:[-300%];opacity:0;s:500;"><img src="assets/frontend/img/slides/slide-title-border-light.png" alt=""></div>

                <div class="tp-caption top-label"
                    data-x="227"
                    data-y="180"
                    data-start="500"
                    data-transform_in="y:[-300%];opacity:0;s:500;"><strong>{{ $row->carousel_judul }}</strong></div>

                <div class="tp-caption"
                    data-x="480"
                    data-y="188"
                    data-start="1000"
                    data-transform_in="x:[300%];opacity:0;s:500;"><img src="assets/frontend/img/slides/slide-title-border-light.png" alt=""></div>

                <div class="tp-caption main-label"
                    data-x="135"
                    data-y="210"
                    data-start="1200"
                    data-transform_in="y:[100%];s:500;"
                    data-transform_out="opacity:0;s:500;"
                    data-mask_in="x:0px;y:0px;"><small>{{ $row->carousel_uraian }}</small></div>

            </li>
            @endforeach
        </ul>
    </div>
</div>

<section class="section m-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h2>Layanan <strong>Pembelajaran</strong></h2>
            </div>
        </div>
        <div class="row mt-lg">
            <div class="col-xs-4">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive mb-lg" src="assets/frontend/img/icons/seo-grey.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="mb-xs">Ekstrakurikuler</h4>
                        <p>Kegiatan Ekstrakurikuler Sekolah</p>
                        <p><a class="btn-flat btn-xs" href="/ekskul">Selengkapnya <i class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive mb-lg" src="assets/frontend/img/icons/marketing-grey.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="mb-xs">Prestasi</h4>
                        <p>Kumpulan prestasi sekolah</p>
                        <p><a class="btn-flat btn-xs" href="/prestasi">Selengkapnya <i class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive mb-lg" src="assets/frontend/img/icons/support-grey.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="mb-xs">Galeri</h4>
                        <p>Kegiatan - kegiatan sekolah</p>
                        <p><a class="btn-flat btn-xs" href="/gallery">Selengkapnya <i class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-no-background m-none">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                    <span class="thumb-info-wrapper">
                        <a href="about-me.html">
                            <img src="{{ $kepalasekolah->kepala_sekolah_gambar }}" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">{{ $kepalasekolah->kepala_sekolah_nama }}</span>
                                <span class="thumb-info-type">Kepala Sekolah</span>
                            </span>
                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">{!! $kepalasekolah->kepala_sekolah_data !!}</span>
                    </span>
                </span>
            </div>
            <div class="col-md-9">
                <h2 class="mb-lg">Pengantar <strong>Kepala Sekolah</strong></h2>
                {!! $kepalasekolah->kepala_sekolah_pengantar !!}
            </div>
        </div>
    </div>
</section>
<div class="container">

    <div class="row">
        <div class="col-md-7">
            <h2>Profil Singkat Sekolah</strong></h2>
            <p class="lead">Bulan Juni/ Juli 1991 penerimaan siswa baru pertama sebagai cikal bakal SMP Negeri 4 Cakranegara yang berfilial pada SMP Negeri 2 Cakranegara yang berlokasi di jalan Anak Agung Ngurah (sekarang BDN/Bank Mandiri) jumlah siswa diterima 40 orang, dengan Kepala Sekolah bapak Ketjir Yasa.</p>

            <p>Bulan desember 1992 SMP Negeri 2 Cakranegara pindah gedung ke lokasi jalan Lalu Mesir di Babakan, maka cikal bakal SMP Negeri 4 yang berfilial mengikutinya. Pada awal 20 Maret 1993 cikal bakal SMP Negeri 4 Cakranegara pindah menempati gedung sendiri yang berlokasi di jalan Brawijaya No.23 sampai dengan sekarang. <a href="/profil"><strong>Baca Selengkapnya...</strong></a></p>

            <hr class="tall">
        </div>
        <div class="col-md-5">
            <h4>Video <strong>Profil</strong></h4>
            <iframe width="460" height="315" src="https://www.youtube.com/embed/gxIAwefqO44" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <hr>
        </div>
    </div>
</div>

<section class="section section-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-xs">Visi <strong>Misi</strong></h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="recent-posts mt-xl">
                            <article class="post">
                                {!! $visimisi->posting_isi !!}
                            </article>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">

                <h2 class="mb-xs">Data <strong>& Informasi Sekolah</strong></h2>

                <div class="content-grid content-grid-dashed mt-xlg mb-lg">
                    <div class="row content-grid-row">
                        @foreach ($informasi as $req)
                        <div class="content-grid-item col-md-6 center">
                            <div class="counters">
                                <div class="counter text-color-light">
                                    <strong data-to="{{ $req->informasi_jumlah }}">0</strong>
                                    <label>{{ $req->informasi_nama }}</label>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="parallax section section-text-light section-parallax section-center mt-none mb-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="assets/frontend/img/parallax-3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
                    <div>
                        <div class="col-md-12">
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                                <div class="testimonial-author">
                                    <img src="{{ $kepalasekolah->kepala_sekolah_gambar }}" class="img-responsive img-circle" alt="">
                                </div>
                                <blockquote>
                                    <p>{!! $kepalasekolah->kepala_sekolah_selogan !!}</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong>{{ $kepalasekolah->kepala_sekolah_nama }}</strong><span>Kepala Sekolah SMPN 14 Mataram</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mt-none section-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h2>Kegiatan / Berita<strong> Sekolah</strong></h2>
            </div>
        </div>
        <div class="row mt-lg">
            @foreach ($kegiatan as $row)
            <div class="col-md-3">
                <img class="img-responsive" src="{{ $row->kegiatan_gambar }}" alt="Blog">
                <div class="recent-posts mt-md mb-lg">
                    <article class="post">
                        <h5><a class="text-dark" href="kegiatan?id={{ $row->kegiatan_id }}">{{ $row->kegiatan_judul }}</a></h5>
                        <p>{!! $row->kegiatan_isi_selengkapnya !!}</p>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> {{ date('d F Y', strtotime($row->created_at)) }} </span>
                            <span><i class="fa fa-user"></i> Oleh <a href="#">{{ $row->operator }}</a> </span>

                        </div>
                    </article>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

