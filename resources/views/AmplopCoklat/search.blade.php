@extends('master')
@section('contents')
    <div class="container">
        <div class="page-banner home-banner">
            <div id="banner" class="row align-items-center flex-wrap-reverse h-100">
                <div class="col-md-6 py-5 wow fadeInLeft">
                    <h1 class="mb-4">
                        Halo, {{$name}}              
                    </h1>
                    <p class="tagline">Disabilitas Bisa Kerja</p>
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="UI Designer">
                        <span><img class="logo-search" src="/images/searchicon.png" alt="Logo-Search" width="20" height="20"></span>
                    </div>
                </div>
                <div class="col-md-62 py-5 wow zoomIn">
                    <div class="img-fluid mt-5">
                        <img src="images/homepic.png" alt="Gambar-Home" width="490" height="369">
                    </div>
                </div>
            </div>
        </div>
    </div>
    



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
        <div class="page-banner home-banner py-5 px-3">
            <div id="banner" class="row align-items-center flex-wrap-reverse">
                <div class="col-md-12 py-2">
                    <div class="d-flex align-items-center">
                        <img id="logo-shopee" src="/images/shopee.png">
                        <ul type="none">
                            <li>UI Designer</li>
                            <li>Shopee</li>
                            <img id="logo-place" src="/images/place.png">
                            <span class="text-secondary-bottom ml-1">Jakarta Selatan</span>
                        </ul>
                    </div>
                    <p class="float-right"> Tutup: <b>05 Desember 2021</b></p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="page-banner home-banner py-5 px-3">
            <div id="banner" class="row align-items-center flex-wrap-reverse">
                <div class="col-md-12 py-2">
                    <div class="d-flex align-items-center">
                        <img id="logo-shopee" src="/images/bukalapak.png">
                        <ul type="none">
                            <li>UI Designer</li>
                            <li>bukalapak</li>
                            <img id="logo-place" src="/images/place.png">
                            <span class="text-secondary-bottom ml-1">Jakarta Timur</span>
                        </ul>
                    </div>
                    <p class="float-right"> Tutup: <b>15 Desember 2021</b></p>
                </div>
            </div>
        </div>
    </div>
@endsection
