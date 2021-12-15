@extends('master')
@section('contents')
    
<body>

  <!-- Back to top button -->

   
  <div class="container">
    <div class="page-banner home-banner">
      <div id="banner" class="row align-items-center flex-wrap-reverse h-100">
        <div class="col-md-6 py-5 wow fadeInLeft">
          <h1 class="mb-4">Find Your Dream Job From Your Uniqueness</h1>
          <p class="tagline">Disabilitas Bisa Kerja</p>
          <form action="{{route('search')}}" method="get">
            <div class="search">
              <input type="text" class="searchTerm" name="term" placeholder="Cari Lowongan Kerja">
              <span>
                <button type="submit" class="btn btn-sm btn-primary-outline p-0" value="Submit">
                  <img class="logo-search" src="/images/searchicon.png" alt="Logo-Search" width = "20" height = "20">
                </button>
              </span>
            </div>
          </form>
        </div>
        <div class="col-md-62 py-5 wow zoomIn">
          <div class="img-fluid mt-5">
            <img src="images/homepic.png" alt="Gambar-Home" width = "490" height = "369">
          </div>
        </div>
      </div>
      <div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll">
          <img src="/images/down-arrow.png" alt="panah-bawah" width ="20" height = "">
        </a>
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row" >
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="body">
              <img id="logo-google" src="{{asset($loker[0]->perusahaan->logo)}}">
              <h5 class="text-secondary">{{$loker[0]->pekerjaan}}</h5>
              <p class="text-secondary-bottom">{{$loker[0]->perusahaan->nama}}</p> 
              <div>
                <img src="/images/location.png" id="gambar-location" width="15" height="20">
                <span clas="nama-lokasi">{{$loker[0]->lokasi}}</span>
                <span class="gaji">@currency($loker[0]->gaji)</span>
              </div>
              <div class="text-right">
                <button type="button" class="btn btn-primary mt-4" onclick="location.href='{{ route('loker.detail',['id'=>$loker[0]->id]) }}'">Details</button>
              </div>     
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="body">
              <img id="logo-google" src="{{asset($loker[1]->perusahaan->logo)}}">
              <h5 class="text-secondary">{{$loker[1]->pekerjaan}}</h5>
              <p class="text-secondary-bottom">{{$loker[1]->perusahaan->nama}}</p> 
              <div>
                <img src="/images/location.png" id="gambar-location" width="15" height="20">
                <span clas="nama-lokasi">{{$loker[1]->lokasi}}</span>
                <span class="gaji">@currency($loker[1]->gaji)</span>
              </div>
              <div class="text-right">
                <button type="button" class="btn btn-primary mt-4" onclick="location.href='{{ route('loker.detail',['id'=>$loker[1]->id]) }}'">Details</button>
              </div>
            </div>
          </div>
        </div>  
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="body">
              <img id="logo-google" src="{{asset($loker[2]->perusahaan->logo)}}">
              <h5 class="text-secondary">{{$loker[2]->pekerjaan}}</h5>
              <p class="text-secondary-bottom">{{$loker[2]->perusahaan->nama}}</p> 
              <div>
                <img src="/images/location.png" id="gambar-location" width="15" height="20">
                <span clas="nama-lokasi">{{$loker[2]->lokasi}}</span>
                <span class="gaji">@currency($loker[2]->gaji)</span>
              </div>
              <div class="text-right">
                <button type="button" class="btn btn-primary mt-4" onclick="location.href='{{ route('loker.detail',['id'=>$loker[2]->id]) }}'">Details</button>
              </div>
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
          <span class="subhead">About Us</span>
          <h2 class="title-section">The number #1 SEO Service Company</h2>
          <div class="divider"></div>

          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
          <a href="about.html" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="../assets/img/about_frame.png" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- LOWONGAN KERJA -->

    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead text-center">Our services</div>
        <h2 class="title-section">How SEO Team Can Help</h2>
        <div class="divider mx-auto"></div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span> 
                  <img src="/images/company.png" alt="logo-perusahaan" width="20" height = "20">
                </span>
              </div>
              <h5>OnSite SEO</h5>
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
              <h5>OnSite SEO</h5>
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
              <h5>OnSite SEO</h5>
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
              <h5>OnSite SEO</h5>
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
              <h5>OnSite SEO</h5>
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
              <h5>OnSite SEO</h5>
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
              <h5>OnSite SEO</h5>
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
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
        </div>

    </div> <!-- .container -->
  </div> <!-- .page-section -->

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