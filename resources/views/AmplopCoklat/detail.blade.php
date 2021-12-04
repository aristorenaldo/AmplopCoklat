@extends('master')
@section('contents')  
    <div class="container">
        <div class="page-banner home-banner py-5 px-3">
            <div id="banner" class="row align-items-center flex-wrap-reverse">
                <div class="col-md-12 py-2">
                    <div class="d-flex align-items-center">
                        <img id="logo-google" src="/images/Google.png">
                        <ul type="none">
                            <li>UI Designer</li>
                            <li>Google LLC</li>
                            <img id="logo-place" src="/images/place.png">
                            <span class="text-secondary-bottom ml-1">Bandung</span>
                        </ul>
                    </div>
                    <p class="float-right"> Tutup: <b>28 November 2021</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <h4 class="title-section">Deskripsi Pekerjaan</h4>
                <p class="text-justify">Untuk kamu yang baru lulus atau fresh graduate juga bisa daftar di lowongan
                    kerja Google Indonesia
                    ini. Selain itu, Google Indonesia juga membuka lowongan kerja bagi kamu yang masih menempuh
                    pendidikan S2. Bahkan, jika kamu tidak memiliki ijazah S1, tetap bisa ikut daftar lowongan kerja
                    Google Indonesia. Asalkan, punya pengalaman yang cukup sesuai dengan kebutuhan dalam lowongan kerja
                    tersebut.</p>
                <h4 class="title-section">Persyaratan</h4>
                <li>S1 atau yang memiliki pengalaman setara</li>
                <li>Berpengalaman 4 tahun di bidang startegi/operasi</li>
                <li>Lancar berbahasa Indonesia dan Inggris</li>
                <a href="service.html" class="btn btn-primary">DAFTAR</a>
            </div>
            <div class="col-lg-6 py-3 wow fadeInRight">
                <div class="img-fluid py-3 text-center">
                    <div class="card-service wow fadeInUp mx-5">
                        <div class="body">
                            <div class="header">
                                <h5 class="text-secondary">Tentang Perusahaan</h5>
                                <div class="divider"></div>
                                <p class="text-justify">Google adalah perusahaan multinasional Amerika Serikat yang
                                    berkekhususan pada jasa
                                    dan produk Internet seperti pencarian, komputasi web, perangkat lunak, dan
                                    periklanan daring.</p>
                                <div class="d-flex align-items-center mb-2">
                                    <img src="/images/telp.png">
                                    <span class="text-secondary-bottom ml-1">( 031 ) 5314771</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="/images/globe.png">
                                    <span class="text-secondary-bottom ml-1">google.com</span>
                                </div>

                                <a href="service.html" class="btn btn-primary">SIMPAN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 py-3">
                    <h3>SEOGram</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis
                        in iusto eligendi iure.</p>

                    <div class="social-media-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                        <a href="#"><span class="mai-logo-youtube"></span></a>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Help & Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Contact Us</h5>
                    <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                    <a href="#" class="footer-link">+00 1122 3344 5566</a>
                    <a href="#" class="footer-link">seogram@temporary.com</a>
                </div>
                <div class="col-lg-3 py-3">
                    <h5>Newsletter</h5>
                    <p>Get updates, news or events on your mail.</p>
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Enter your email..">
                        <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
                    </form>
                </div>
            </div>

            <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and develop by <a
                    href="https://macodeid.com/" target="_blank">MACode ID</a></p>
        </div>
    </footer>
@endsection