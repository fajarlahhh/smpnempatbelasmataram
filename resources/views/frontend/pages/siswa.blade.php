@extends('frontend.pages.main')

@section('subcontent')
<div role="main" class="main">
    <p></p>
    <div class="container">
        <h2><strong>Data</strong> Peserta Didik</h2>
        <div class="row">
            <div class="col-md-12">
                <p class="lead">
                    Seiring berlajunya waktu SMP Negeri 14 Mataram berkembang menjadi salah satu sekolah yang sangat dipandang atau diminati oleh masyarakat dalam menyekolahkan anaknya karena berlokasi di tempat yang sangat strategis yaitu jalan besar Brawijaya yang tidak jauh dari Pusat Pemerintahan Kota Mataram dan begitu juga tidak jauh dari berbagai Pusat Pendidikan baik Sekolah Dasar, Menengah, Maupun Pergurun Tinggi yang ada di kota Mataram dan Pusat Perdagangan, sehingga sarana-prasarananyapun terus berbenah mengikuti penambahan jumlah siswa-siswi yang masuk mendaftar setiap tahunnya.
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="toggle toggle-primary mt-lg" data-plugin-toggle>
                    @foreach ($data as $row)
                    <section class="toggle">
                        <label>{{ $row->siswa_kelas }}</label>
                        <div class="toggle-content">
                            <p><strong>Jumlah Total Peserta Didik </strong></p>
                            <p><a class="btn btn-primary mb-xl" href="#">{{ $row->siswa_jumlah }} Siswa</a></p>
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
