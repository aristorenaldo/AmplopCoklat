<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{--
    <link href="{{ asset('css/statusloker.css') }}" rel="stylesheet"> --}}
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
                <a href="#" id="judul" class="navbar-brand">AmplopCoklat</a>

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
                            <a class="btn btn-primary ml-lg-2" href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
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

    <div class="container mt-4">
        <h3>Pendaftar:</h3>
        <div class="col-lg-12 p-5 rounded-top border">
        
            <div class="row border-bottom border-dark py-2">
                <div class="col-md-8 py-auto">
                    <p class="mb-0">Ayus Tizhar</p>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-primary">Form</a>
                    <a href="" class="btn btn-secondary">Berkas</a>
                </div>
            </div>
            <div class="row border-bottom border-dark py-2">
                <div class="col-md-8 py-auto">
                    <p class="mb-0">Prambon Ruhayu</p>
                </div>
             
                <div class="col-md-4">
                    <a href="" class="btn btn-primary">Form</a>
                    <a href="" class="btn btn-secondary">Berkas</a>
                </div>
            </div>
            <div class="row border-bottom border-dark py-2">
                <div class="col-md-8 py-auto">
                    <p class="mb-0">Budi Budidi</p>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-primary">Form</a>
                    <a href="" class="btn btn-secondary">Berkas</a>
                </div>
            </div>  
            
        </div>
    </div>
    <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 py-3">
                    <h3>SEOGram</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet,
                        repellendus eius blanditiis in iusto eligendi iure.</p>

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

            <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and
                develop by <a href="https://macodeid.com/" target="_blank">MACode ID</a></p>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/google-maps.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>