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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
                                        <li class="active"><a href="/home"></i>Home</a>
                                        </li>
                                        <li><a href="courses.html">Matematika</a></li>
                                        <li><a href="events.html">IPA</a></li>
                                        <li><a href="contact.html">IPS</a></li>
                                        <li><a href="events.html">Bahasa Inggris</a></li>
                                        <li><a href="events.html">Bahasa Indonesia</a></li>
                                        <li><a href="#">Pages <i class="fa-solid fa-chevron-up fa-rotate-180"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="teachers.html"><i class="fa-solid fa-cart-shopping"></i>Detail Pesanan</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                                <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                                            </a>
                                            <ul class="dropdown">
                                                <li><a href="teachers.html"><i class="fa-solid fa-cart-shopping"></i>Profile</a></li>
                                                <li>  <form id="logoutForm" action="{{ route('logout') }}" method="POST">
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


    <!-- Courses -->
    <section class="courses section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head">
                            <img src="assets/images/courses/course1.jpg" alt="#"  >
                            {{-- <div class="overlay-content">
                                <a href="course-single.html" class="btn white primary">Register Now</a>
                            </div> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author1.jpg" alt="#" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                    <h4 class="title">Jewel Mathies</h4>
                                </div>
                                <span class="price">$350</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan consequa</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course3.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author3.jpg" alt="#">
                                    <h4 class="title">Noha Brown</h4>
                                </div>
                                <span class="price">Free</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Free PHP Web Development</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course2.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author2.jpg" alt="#">
                                    <h4 class="title">Jenola Protan</h4>
                                </div>
                                <span class="price">$290</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Learn Web Developments Course</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course4.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author1.jpg" alt="#">
                                    <h4 class="title">Jewel Mathies</h4>
                                </div>
                                <span class="price">$350</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a>
                            </h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan consequa</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course4.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author3.jpg" alt="#">
                                    <h4 class="title">Noha Brown</h4>
                                </div>
                                <span class="price">Free</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Free PHP Web Development</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course3.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author2.jpg" alt="#">
                                    <h4 class="title">Jenola Protan</h4>
                                </div>
                                <span class="price">$290</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Learn Web Developments Course</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan</p>
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Open Modal
                                </button> --}}
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
            </div>
        </div>
    </section>
    <div class="modal" id="myModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="inputText" class="col-sm-4 col-form-label">metode pembayaran</label>
                <div class="row mb-3">
                    <div class="col-sm-12">
                    <select class="form-select form-select-SM mb-3" name="metode_pembayaran" aria-label="Large select example" id="metode_pembayaran">
                        <option selected>Pilih metode</option>
                        <option value="BANK">BANK</option>
                        <option value="E-WALET">E-WALET</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    <!--/ End Courses -->


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
