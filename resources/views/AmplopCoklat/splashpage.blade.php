<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/maicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <title>AmplopCoklat</title>

</head>
<body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a href="#" id="judul" class="navbar-brand">Amplop Coklat</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary2 ml-lg-2" href="#">Register</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <div class="page-banner home-banner">
            <div id="banner" class="row align-items-center flex-wrap-reverse h-100">
                <div class="col-md-6 py-5 wow fadeInLeft">
                    <h1 class="mb-4">Halo, Budi Budidi!</h1>
                    <p class="tagline">Disabilitas Bisa Kerja</p>
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="Cari Lowongan Kerja">
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
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-4" id="card-loker1">
                <div class="card-service wow fadeInUp">
                    <div class="body">
                        <img id="logo-google" src="/images/Google.png">
                        <h5 class="text-secondary">UI Designer</h5>
                        <p class="text-secondary-bottom">Google LLC</p>
                        <div>
                            <img src="/images/location.png" id="gambar-location" width="15" height="20">
                            <span clas="nama-lokasi">Bandung</span>
                            <span class="gaji">Rp. 8jt/bulan</span>
                        </div>
                        <a href="service.html" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="card-service wow fadeInUp">
                <div class="body">
                    <img id="logo-google" src="/images/gojek.png">
                    <h5 class="text-secondary">Android Developer</h5>
                    <p class="text-secondary-bottom">Gojek</p>
                    <div>
                        <img src="/images/location.png" id="gambar-location" width="15" height="20">
                        <span clas="nama-lokasi">Jakarta</span>
                        <span class="gaji">Rp. 10jt/bulan</span>
                    </div>
                    <a href="service.html" class="btn btn-primary">Details</a>
                </div>
            </div>
            
            <div class="card-service wow fadeInUp">
                <div class="body">
                    <img id="logo-google" src="/images/tokopedia.png">
                    <h5 class="text-secondary">Data Engineer</h5>
                    <p class="text-secondary-bottom">Tokopedia</p>
                    <div>
                        <img src="/images/location.png" id="gambar-location" width="15" height="20">
                        <span clas="nama-lokasi">Jakarta</span>
                        <span class="gaji">Rp. 15jt/bulan</span>
                    </div>
                    <a href="service.html" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
    </div> <!-- .container -->
    </div>