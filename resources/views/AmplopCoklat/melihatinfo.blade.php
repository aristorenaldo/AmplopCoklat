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
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

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

    <div class="page-section2">
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
    </div>

    <div class="page-section3">
        <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);"> 
            <div class="row">
                <div class="col align-items-start">
                <div class="contactfooter">
                    <h5 id="kontak">Contact Us</h5>
                    <p>Jl.Soekarno Hatta No. 1A, Jakarta</p>
                    <p>+00 1122 3344 5566</p>
                    <p>amplopc@gmail.com</p>
                </div> 
                </div>  
                <div class="vl"></div>
                <div class="col align-items-end">
                <h3 id="footersosmed">Visit Our Social Media</h3>
                <div class="sosmed">
                    <a href="https://www.facebook.com/tokopedia/">
                    <img src="/images/facebook.png" alt="Facebook" width="40" height="40">
                    </a>
                    <a href="https://www.instagram.com/tokopedia/">
                    <img src="/images/instagram.png" alt="Instagram" width="40" height="40">
                    </a>
                    <a href="https://www.twitter.com/tokopedia/">
                    <img src="/images/twitter.png" alt="Twitter" width="40" height="40">
                    </a>
                    <a href="https://www.youtube.com/user/tokopedia">
                    <img src="/images/youtube.png" alt="Youtube" width="40" height="40">
                    </a>
                </div>
                </div>
            </div>
            <div class="copyright text-center">© 2021, Amplop Coklat</div>
        </footer>
    </div>

    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/google-maps.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>