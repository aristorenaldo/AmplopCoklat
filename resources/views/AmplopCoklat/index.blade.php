<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/maicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

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
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary2 ml-lg-2" href="#">Sign Up</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div id="banner" class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Find Your Dream Job From Your Uniqueness</h1>
            <p class="tagline">Disabilitas Bisa Kerja</p>
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Cari Lowongan Kerja">
              <span><img class="logo-search" src="/images/searchicon.png" alt="Logo-Search" width = "20" height = "20"></span>
            </div>
          </div>
          <div class="col-md-62 py-5 wow zoomIn">
            <div class="img-fluid mt-5">
              <img src="images/homepic.png" alt="Gambar-Home" width = "490" height = "369">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="text-center wow fadeInUp">
      <div class="subhead2">Lowongan Pekerjaan Tersedia</div>
      <div class="divider mx-auto"></div>
    </div>
    <div class="container">
      <div class="row" >
        <div class="col-lg-4">
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
        <div class="col-lg-4">
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
        </div>  
        <div class="col-lg-4">
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
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">TENTANG KAMI</span>
          <h2 class="title-section">Platform Kerja Untuk Disabilitas</h2>
          <div class="divider"></div>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
          <a href="about.html" id="button-about" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img id="gambar-about" src="images/about.png" alt="gambar-aboutus" width = "388" height = "426">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section2">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead2">MITRA KERJA KAMI</div>
        <h2 class="title-section">You Can Find Job From Our Mitra</h2>
        <div class="divider mx-auto"></div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>Dana</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>OVO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>Lazada</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>Tokopedia</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>Blibli</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>Bibit</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>Google</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>Gojek</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="page-section3">
    <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);"> 
      <div class="css-u22cvr">
        <!-- <div class="contactfooter">
          <h5>Contact Us</h5>
          <p>Jl.Soekarno Hatta No. 1A, Jakarta</p>
          <a href="#" class="footer-link">+00 1122 3344 5566</a>
          <a href="#" class="footer-link">amplopc@gmail.com</a>
        </div>  -->
      <div class="vl"></div>
        <h3 id="footersosmed">Visit Our Social Media</h3>
        <div class="sosmed">
          <a href="https://www.facebook.com/tokopedia/" target="_blank" rel="noopener noreferrer" class="css-17dtaj">
            <img src="/images/facebook.png" alt="Facebook" class="css-11u4aza loaded" width="40" height="40">
          </a>
          <a href="https://www.instagram.com/tokopedia/" target="_blank" rel="noopener noreferrer" class="css-17dtaj">
            <img src="/images/instagram.png" alt="Instagram" class="css-11u4aza loaded" width="40" height="40">
          </a>
          <a href="https://www.twitter.com/tokopedia/" target="_blank" rel="noopener noreferrer" class="css-17dtaj">
            <img src="/images/twitter.png" alt="Twitter" class="css-11u4aza loaded" width="40" height="40">
          </a>
          <a href="https://www.youtube.com/user/tokopedia" target="_blank" rel="noopener noreferrer" class="css-17dtaj">
            <img src="/images/youtube.png" alt="Youtube" class="css-11u4aza loaded" width="40" height="40">
          </a>
        </div>
      </div>
    <div class="copyright">© 2021, Amplop Coklat</div>
    </footer>
  </div>

<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/google-maps.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  
</body>
</html>


