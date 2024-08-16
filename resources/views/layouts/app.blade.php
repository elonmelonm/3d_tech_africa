<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- my file -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-area navbar-area-2 navbar-expand-lg bg-white">
            <div class="container nav-container custom-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#itech_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="assets/img/tech_africa.jpg" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search-bar-btn" href="#">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse" style="" id="itech_main_menu">
                    <ul class="navbar-nav menu-open text-lg-end ps-lg-5">
                        <li>
                            <a href="{{ url('/') }}">Accueil</a>

                        </li>
                        <li>
                            <a href="{{ route('services') }}">Services</a>

                        </li>
                        <li>
                            <a href="{{ route('about') }}">A propos</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contactez-nous</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li><a href="{{ route('login') }}">Connecter</a></li>
                            @endif
                            @if (Route::has('login'))
                                <li><a href="{{ route('register') }}">S'inscrire</a></li>
                            @endif

                        @else
                            <li class="menu-item-has-children">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                     </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}


        <main class="py-4">
            @yield('content')
        </main>
    </div>


<footer class="footer-area bg-black mt-0 pd-top-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="widget widget_about">
                    <div class="thumb">
                        <img src="assets/img/tech-africa-blue-white.png" alt="img">
                    </div>
                    <div class="details">
                        <p>Maintenir des standards élevés dans tout ce que nous faisons.</p>
                        <ul class="social-media">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 offset-xl-2 col-md-6 ps-xl-5">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Nos Services</h4>
                    <ul>
                        <li><a href="service.html"><i class="fas fa-chevron-right"></i> Digital Marketing</a></li>
                        <li><a href="service.html"><i class="fas fa-chevron-right"></i> Video Editing</a></li>
                        <li><a href="service.html"><i class="fas fa-chevron-right"></i> Pc Repairs </a></li>
                        <li><a href="service.html"><i class="fas fa-chevron-right"></i> Web Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 offset-xl-1 col-md-6">
                <div class="widget widget_about">
                    <h4 class="widget-title">Nos Services</h4>
                    <div class="details">
                        <p>Maintenir des standards élevés dans tout ce que nous faisons.</p>
                        <div class="subscribe mt-4">
                            <input type="text" placeholder="E-mail">
                            <button><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-gray-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p>© Yoursitename  2024 | All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-lg-end">
                    <a href="#">Trams & Condition</a>
                    <a href="#">Privacy Policy</a>
                    <a href="{{ route('contact') }}">Contactez-nous</a>
                </div>
            </div>
        </div>
    </div>
</footer>

    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter-up.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>
</html>
