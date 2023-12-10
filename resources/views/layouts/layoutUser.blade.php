<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from themewagon.github.io/eduland/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 09:12:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Eduland &minus; Education & Courses HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.html">

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/niceselect.css') }}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/cube-portfolio.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- Eduland Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Eduland Colors -->
    <link rel="stylesheet" href="{{ asset('assets/css/colors/color1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        /* Mengatur lebar form dan memberikan radius */
        .detail {
            max-width: 1000px;
            margin: auto;
            background-color: #4FA987;
            border: 1px solid #4FA987;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
            height: 50px;
            /* text-align: center; Menyusun teks di tengah form */
        }

        /* Menambahkan tinggi pada input */
        .form-control {
            height: 40px;
        }

        /* Menyesuaikan tinggi pada tombol */
        .btn {
            height: 40px;
        }

        form h5 {
            color: #fff;
            margin: 0;
        }

        .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

         /* Mengatur ukuran dan jarak card */
         .card {
        /* margin-left: 150px; */
        width: 300px;
        margin-top: 25px;
        border-radius: 10px;
        background-color: #ffffff; /* Ganti warna latar belakang sesuai kebutuhan */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        color: #3B9680;
        }

        /* Mengatur warna teks dan latar belakang card body */
        .card-body {
            color: #3B9680;
            background-color: #ffffff; /* Ganti warna latar belakang sesuai kebutuhan */
            border-radius: 10px;
        }

        .logout-btn {
            color: #3B9680 !important; /* Override the color */
            background-color: transparent !important; /* Override the background color */
            border: none; /* Remove border */
        }

                /* Add this CSS to make the profile picture circular */
        .profile-image {
            width: 55px; /* Adjust the width as needed */
            height: 50px; /* Adjust the height as needed */
            border-radius: 50%; /* Make it a circle */
            object-fit: cover; /* Ensure the entire image is visible in the circle */
            border: 2px solid #ffffff; /* Optional: Add a border around the circle */
        }

        /* You might want to adjust the styles for the dropdown and other elements as needed */
        .dropdown img {
            width: 50px; /* Adjust the width as needed */
            height: 30px; /* Adjust the height as needed */
            border-radius: 50%; /* Make it a circle */
            object-fit: cover; /* Ensure the entire image is visible in the circle */
        }

    </style>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6">
                        <!-- Logo -->
                        <div class="logo">
                            {{-- <a href="index-2.html"><img src="assets/images/learnlogo.png" alt="#"></a> --}}
                        </div>
                        <!--/ End Logo -->
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="menu-bar">
                            <nav class="navbar navbar-default">
                                <div class="navbar-collapse">
                                    <!-- Main Menu -->
                                    <ul id="nav" class="nav menu navbar-nav">
                                        <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="/home"  style="color: #ffffff"></i>Home</a>
                                        </li>
                                        <li class="{{ request()->is('detailpemesanan') ? 'active' : '' }}"><a href="/detailpemesanan" style="color: #ffffff">Matematika</a></li>
                                        <li class="{{ request()->is('events') ? 'active' : '' }}"><a href="events.html"  style="color: #ffffff">IPA</a></li>
                                        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="contact.html"  style="color: #ffffff">IPS</a></li>
                                        <li class="{{ request()->is('teachers') ? 'active' : '' }}"><a href="events.html"  style="color: #ffffff">Bahasa Inggris</a></li>
                                        <li class="{{ request()->is('teachers') ? 'active' : '' }}"><a href="events.html"  style="color: #ffffff">Bahasa Indonesia</a></li>
                                        <li class="{{ request()->is('teachers') ? 'active' : '' }}"><a href="#"  style="color: #ffffff">Pages <i class="fa-solid fa-chevron-up fa-rotate-180"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="/detailpemesanan"><i class="fa-solid fa-cart-shopping"></i>Detail Pesanan</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('storage/' . Auth::user()->foto_user) }}" alt="Profile" class="rounded-circle profile-image">
                                                <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                                            </a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('Profile')}}"><i class="fa-solid fa-cart-shopping"></i>Profile</a></li>
                                                <li>
                                                    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <a href="#" onclick="document.getElementById('logoutForm').submit();">
                                                        <i class="bi bi-box-arrow-right"></i>
                                                        <span>Sign Out</span>
                                                    </a>
                                                </form>
                                            </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- End Main Menu -->
                                </div>
                            </nav>
                        </div>
                        <div class="search-area">
                            <a href="#header" class="icon"><i class="fa fa-search"></i></a>
                            <form class="search-form">
                                <input type="text" placeholder="ex: premium course" name="search">
                                <button value="search " type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div id="kelas" class="kelas">
                    <!-- Your existing navbar content goes here -->
                    <a href="/home">Kelas 10</a>
                    <a href="courses.html">Kelas 11</a>
                    <a href="events.html"></a>
                    <!-- Add other navbar links as needed -->
                </div> --}}
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->
    <div class="main-content py-3 px-3">
        <div class="container-fluid">
          @yield('content')
        </div>
    </div>
<!-- Jquery JS-->
<script src="{{ asset('assets/js/jqueri.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
<!-- Colors JS-->
<script src="{{ asset('assets/js/colors.js') }}"></script>
<!-- Popper JS-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel JS-->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Jquery Steller JS -->
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<!-- Final Countdown JS -->
<script src="{{ asset('assets/js/finalcountdown.min.js') }}"></script>
<!-- Fancy Box JS-->
<script src="{{ asset('assets/js/facnybox.min.js') }}"></script>
<!-- Magnific Popup JS-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Circle Progress JS -->
<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('assets/js/niceselect.js') }}"></script>
<!-- Jquery Steller JS-->
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<!-- Jquery Steller JS-->
<script src="{{ asset('assets/js/cube-portfolio.min.js') }}"></script>
<!-- Slick Nav JS-->
<script src="{{ asset('assets/js/slicknav.min.js') }}"></script>
<!-- Easing JS-->
<script src="{{ asset('assets/js/easing.min.js') }}"></script>
<!-- Waypoints JS-->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- Counter Up JS -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- Scroll Up JS-->
<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
<!-- Gmaps JS-->
<script src="{{ asset('assets/js/gmaps.min.html') }}"></script>
<!-- Main JS-->
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
</body>

<!-- Mirrored from themewagon.github.io/eduland/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 09:12:43 GMT -->

</html>
