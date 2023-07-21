<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wawasan Nusantara | @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS Only -->
    <script src="{{ asset('assets/vendor/font-awesome/font_awesome.js') }}"></script>
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/peta.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"> --}}

    @stack('style')

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar1 -->
    <nav class="navbar bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand">WAWASAN NUSANTARA </a>
            <a class="navbar-brand fs-6">Keberagaman Budaya</a>
        </div>
    </nav>

    <!-- Navbar2 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active ms-3 " aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-3 " aria-current="page" href="/provinsi">Provinsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-3 " aria-current="page" href="/about_me">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-3 " aria-current="page" href="/quizzes">Quis</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="carausels">
        @yield('carausel')
    </div>

    <div class="colases">
        @yield('colase')
    </div>

    <div class="abouts">
        @yield('about')
    </div>

    <div class="faqs">
        @yield('faq')
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="calls">
        @yield('call')
    </div>


    <div class="footer">
        @include('layouts.footer')
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- java script Only -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Spesific JS for page -->
    @stack('scripts')

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
