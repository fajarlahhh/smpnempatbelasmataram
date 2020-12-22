@inject('kontak', 'App\Models\Kontak')
<footer class="short" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4 class="heading-primary">Tentang Sekolah</h4>
                <p>{!! $kontak->first()->kontak_uraian !!}</p>
                <hr class="light">
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h5 class="mb-sm">Kontak Sekolah</h5>
                <span class="phone">{!! $kontak->first()->kontak_telp !!}</span>
                <p class="mb-none">{!! $kontak->first()->kontak_alamat !!}</p>
                <p class="mb-none">{!! $kontak->first()->kontak_kota !!}</p>
                <ul class="list list-icons list-icons-sm">
                    <li><i class="fa fa-envelope"></i> <a href="mailto:okler@okler.net">{!! $kontak->first()->kontak_email !!}</a></li>
                </ul>
                <ul class="social-icons">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">

                <div class="col-md-11">
                    <p>© Copyright 2020. SMPN 14 Mataram - Support System by <a href="https://lestari-informatika.com"><strong>Lestari Informatika</strong></a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
