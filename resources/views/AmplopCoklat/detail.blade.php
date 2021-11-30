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
    <div class="back-to-top"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a href="#" id="judul" class="navbar-brand">AmplopCoklat</a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="btn btn-primary ml-lg-2" href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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
    </header>
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

    <div class="page-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <span class="subhead">About Us</span>
                    <h2 class="title-section">The number #1 SEO Service Company</h2>
                    <div class="divider"></div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
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
    </div>

    <div class="page-section bg-light">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Our services</div>
                <h2 class="title-section">How SEO Team Can Help</h2>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>OnSite SEO</h5>
                        <p>We analyse your website's structure, internal architecture & other key</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>OnSite SEO</h5>
                        <p>We analyse your website's structure, internal architecture & other key</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>OnSite SEO</h5>
                        <p>We analyse your website's structure, internal architecture & other key</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>OnSite SEO</h5>
                        <p>We analyse your website's structure, internal architecture & other key</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>OnSite SEO</h5>
                        <p>We analyse your website's structure, internal architecture & other key</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>OnSite SEO</h5>
                        <p>We analyse your website's structure, internal architecture & other key</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>OnSite SEO</h5>
                        <p>We analyse your website's structure, internal architecture & other key</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>OnSite SEO</h5>
                        <p>We analyse your website's structure, internal architecture & other key</p>
                    </div>
                </div>
            </div>

        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section banner-seo-check">
        <div class="wrap bg-image" style="background-image: url(../assets/img/bg_pattern.svg);">
            <div class="container text-center">
                <div class="row justify-content-center wow fadeInUp">
                    <div class="col-lg-8">
                        <h2 class="mb-4">Check your Website SEO</h2>
                        <form action="#">
                            <input type="text" class="form-control" placeholder="E.g google.com">
                            <button type="submit" class="btn btn-success">Check Now</button>
                        </form>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .wrap -->
    </div> <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Pricing Plan</div>
                <h2 class="title-section">Choose plan the right for you</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 py-3 wow zoomIn">
                    <div class="card-pricing">
                        <div class="header">
                            <div class="pricing-type">Basic</div>
                            <div class="price">
                                <span class="dollar">$</span>
                                <h1>39<span class="suffix">.99</span></h1>
                            </div>
                            <h5>Per Month</h5>
                        </div>
                        <div class="body">
                            <p>25 Analytics <span class="suffix">Campaign</span></p>
                            <p>1,300 Change <span class="suffix">Keywords</span></p>
                            <p>Social Media <span class="suffix">Reviews</span></p>
                            <p>1 Free <span class="suffix">Optimization</span></p>
                            <p>24/7 <span class="suffix">Support</span></p>
                        </div>
                        <div class="footer">
                            <a href="#" class="btn btn-pricing btn-block">Subscribe</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3 wow zoomIn">
                    <div class="card-pricing marked">
                        <div class="header">
                            <div class="pricing-type">Standar</div>
                            <div class="price">
                                <span class="dollar">$</span>
                                <h1>59<span class="suffix">.99</span></h1>
                            </div>
                            <h5>Per Month</h5>
                        </div>
                        <div class="body">
                            <p>25 Analytics <span class="suffix">Campaign</span></p>
                            <p>1,300 Change <span class="suffix">Keywords</span></p>
                            <p>Social Media <span class="suffix">Reviews</span></p>
                            <p>1 Free <span class="suffix">Optimization</span></p>
                            <p>24/7 <span class="suffix">Support</span></p>
                        </div>
                        <div class="footer">
                            <a href="#" class="btn btn-pricing btn-block">Subscribe</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3 wow zoomIn">
                    <div class="card-pricing">
                        <div class="header">
                            <div class="pricing-type">Professional</div>
                            <div class="price">
                                <span class="dollar">$</span>
                                <h1>99<span class="suffix">.99</span></h1>
                            </div>
                            <h5>Per Month</h5>
                        </div>
                        <div class="body">
                            <p>25 Analytics <span class="suffix">Campaign</span></p>
                            <p>1,300 Change <span class="suffix">Keywords</span></p>
                            <p>Social Media <span class="suffix">Reviews</span></p>
                            <p>1 Free <span class="suffix">Optimization</span></p>
                            <p>24/7 <span class="suffix">Support</span></p>
                        </div>
                        <div class="footer">
                            <a href="#" class="btn btn-pricing btn-block">Subscribe</a>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Banner info -->
    <div class="page-section banner-info">
        <div class="wrap bg-image" style="background-image: url(../assets/img/bg_pattern.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
                        <h2 class="title-section">SEO to Improve Brand <br> Visibility</h2>
                        <div class="divider"></div>
                        <p>We're an experienced and talented team of passionate consultants who breathe with search
                            engine marketing.</p>

                        <ul class="theme-list theme-list-light text-white">
                            <li>
                                <div class="h5">SEO Content Strategy</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor</p>
                            </li>
                            <li>
                                <div class="h5">B2B SEO</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 py-3 wow fadeInRight">
                        <div class="img-fluid text-center">
                            <img src="../assets/img/banner_image_2.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .wrap -->
    </div> <!-- .page-section -->


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

    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/google-maps.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>