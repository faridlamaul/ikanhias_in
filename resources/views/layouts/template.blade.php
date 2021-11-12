<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ikanhias.in') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('fish.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <div class="left navbar-nav mr-2">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}">
                    </a>
                </div>

                <div class="mid navbar-nav mr-3 ml-3">
                    <input id="search-focus" type="search" class="form-control rounded" placeholder="Search"
                        aria-label="Search" aria-describedby="search-addon" style="width:550px !important" />
                    <span class="input-group-text border-0 ml-1" id="search-addon">
                        <i class="bi bi-search"></i>
                    </span>
                </div>

                <!-- Right Side Of Navbar -->
                <ul class="right navbar-nav ml-2">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">Tentang</a>
                        </li>
                        @if (Route::has('login'))
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
    

    <main class="py-4">
        @yield('content')
    </main>
    
    <footer class="footer mt-auto py-3">
        <div class="card">
            <div class="heading text-center">
                <img src="{{ asset('img/logo.png') }}">
                <p class="bdr"></p>
            </div>
            <div class="card-body">
                <div class="row m-0 pt-3">
                    <div class="card col-md">
                        <div class="card-content"> <i class="fas fa-hand-holding-usd fa-3x"></i>
                            <div class="card-title"> Ikanhias.in </div>
                            <p>PT Aneka Usaha Indonesia</p>
                            <a href="#">Layanan dan Kebijakan</a><br>
                            <a href="#">Hak Cipta</a><br>
                            <a href="#">Tentang Kami</a><br>
                        </div>
                    </div>
                    <div class="card col-md">
                        <div class="card-content"> <i class="far fa-handshake fa-3x"></i>
                            <div class="card-title"> PARTNERSHIP </div>
                            <p class="subtitle"><small><b>Mitra Kurir</b></small></p>
                            <p><small>JNE &ensp;|&ensp; J&T &ensp;|&ensp; TiKi</small></p>
                            <p class="subtitle"><small><b>Payment Service</b></small></p>
                            <p><small>OVO &ensp;|&ensp; BRI &ensp;|&ensp; Mandiri &ensp;|&ensp; BCA &ensp;|&ensp; Dana &ensp;|&ensp; LinkAja</small></p>
                        </div>
                    </div>
                    <div class="card col-md">
                        <div class="card-content"> <i class="fas fa-mobile-alt fa-3x"></i>
                            <div class="card-title"> KONTAK KAMI : </div>
                            <p><small>EMAIL : marketing_admin@ikanhiasin.com</small></p>
                            <p><small>TELEPON : 081123456789</small></p>
                            <p><small>CUSTOMER SERVICE : <br> Senin - Jumat <br> Pukul 09.00 s.d. 18.00 </small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer row m-0">
                <div>
                    <p> <label
                            class="footer-right"> <i class="fab fa-instagram"></i> <i
                                class="fab fa-facebook-square"></i> <i class="fab fa-linkedin"></i> <i
                                class="fab fa-twitter-square"></i> </label> </p>
                </div>
            </div>
        </div>
    </footer>
    
</body>

</html>
