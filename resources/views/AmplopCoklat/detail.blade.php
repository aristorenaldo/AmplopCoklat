@extends('master')
@section('contents')  
{{-- @dd($loker->perusahaan->logo) --}}
    <div class="container">
        <div class="page-banner home-banner py-5 px-3">
            <div id="banner" class="row align-items-center flex-wrap-reverse">
                <div class="col-md-12 py-2">
                    <div class="d-flex align-items-center">
                        <img id="logo-google" src="{{asset($loker->perusahaan->logo)}}">
                        <ul type="none">
                            <li>
                                <h4><strong>{{$loker->pekerjaan}}</strong></h4>
                            </li>
                            <li>{{$loker->perusahaan->nama}}</li>
                            <li>@currency($loker->gaji)</li>
                            <img id="logo-place" src="/images/place.png">
                            <span class="text-secondary-bottom ml-1">{{$loker->lokasi}}</span>
                        </ul>
                    </div>
                    <p class="float-right"> Tutup: <b>{{$loker->getTglTutup()}}</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <h4 class="title-section mt-4">Deskripsi Pekerjaan</h4>
                <p class="text-justify">
                    {{$loker->deskripsi}}
                </p>
                <h4 class="title-section mt-5">Persyaratan</h4>
                @foreach ($loker->persyaratan as $syarat)
                <li>{{$syarat->syarat}}</li>
                @endforeach
                <a href="service.html" class="btn btn-primary mt-5">DAFTAR</a>
            </div>
            <div class="col-lg-6 py-3 wow fadeInRight">
                <div class="img-fluid py-3 text-center">
                    <div class="card-service wow fadeInUp mx-5">
                        <div class="body">
                            <div class="header">
                                <h5 class="text-secondary">Tentang Perusahaan</h5>
                                <div class="divider"></div>
                                <p class="text-justify">
                                    {{$loker->perusahaan->deskripsi}}
                                </p>
                                <div class="d-flex align-items-center mt-5">
                                    <img src="/images/telp.png">
                                    <span class="text-secondary-bottom ml-1">{{$loker->perusahaan->kontak}}</span>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <img src="/images/globe.png">
                                    <span class="text-secondary-bottom ml-1">{{$loker->perusahaan->website}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="page-section3">
        <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);"> 
        <div class="row">
            <div class="col align-items-start">
            <div class="contactfooter">
                <h5 id="kontak">Contact Us</h5>
                <p class="ketkontak">Jl.Soekarno Hatta No. 1A, Jakarta</p>
                <p class="ketkontak">+00 1122 3344 5566</p>
                <p class="ketkontak">amplopc@gmail.com</p>
            </div> 
            </div>  
            <div class="vl"></div>
            <div class="col align-items-end">
            <h3 id="footersosmed">Visit Our Social Media</h3>
            <div class="sosmed">
                <a href="https://www.facebook.com">
                <img src="/images/facebook.png" alt="Facebook" width="40" height="40">
                </a>
                <a href="https://www.instagram.com">
                <img src="/images/instagram.png" alt="Instagram" width="40" height="40">
                </a>
                <a href="https://www.twitter.com">
                <img src="/images/twitter.png" alt="Twitter" width="40" height="40">
                </a>
                <a href="https://www.youtube.com">
                <img src="/images/youtube.png" alt="Youtube" width="40" height="40">
                </a>
            </div>
            </div>
        </div>
        <div class="copyright text-center">© 2021, Amplop Coklat</div>
        </footer>
    </div>
@endsection