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
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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
            <p id="tagline">Disabilitas Bisa Kerja</p>
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Cari Lowongan Kerja">
            </div>
          </div>
          <div class="col-md-62 py-5 wow zoomIn">
            <div class="img-fluid text-center">
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

  <!-- LOWONGAN KERJA
  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our Blog</div>
        <h2 class="title-section">Read Latest News</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="../assets/img/blog/blog-1.jpg" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="../assets/img/blog/blog-2.jpg" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="../assets/img/blog/blog-3.jpg" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-12 mt-4 text-center wow fadeInUp">
          <a href="blog.html" class="btn btn-primary">View More</a>
        </div>
      </div>
    </div>
  </div> -->

  <div class="page-section2">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead2">MITRA KERJA KAMI</div>
        <h2 class="title-section">You Can Find Job From Our Mitra</h2>
        <div class="divider mx-auto"></div>
      </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Dana</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OVO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Lazada</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Tokopedia</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Blibli</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Bibit</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>

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

      <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and develop by <a href="https://macodeid.com/" target="_blank">MACode ID</a></p>
    </div>
  </footer>

<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/google-maps.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  
</body>
</html>