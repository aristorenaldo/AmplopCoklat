<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/theme.js') }}" defer></script>

    <script src="{{ asset('js/google-maps.js') }}" defer></script>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>

    <script src="{{ asset('js/app.js') }}" defer></script>


    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/maicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/seleksiberkas.css') }}" rel="stylesheet">

    <title>AmplopCoklat</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a href="{{url('/')}}" id="judul" class="navbar-brand">AmplopCoklat</a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-2" href="{{route('login')}}">Login</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">
                                {{Auth::user()->username}}
                            </button>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a href="{{route('liststatus')}}">Lihat Riwayat</a>
                            </div>
                            
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('contents')
    
    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/google-maps.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>