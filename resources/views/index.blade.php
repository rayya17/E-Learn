<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Landing Page</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Css -->
    <link href="{{ asset('assets/landing/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/landing/bootstrap.min.css') }}" id="bootstrap-style" class="theme-opt" rel="stylesheet"
        type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('assets/landing/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/landing/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{ asset('assets/landing/style.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet"
        type="text/css">
</head>
<style>
    .Get {
  position: relative;
  padding: 10px 20px;
  border-radius: 7px;
  border: 1px solid rgb(61, 106, 255);
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  background: transparent;
  color: #ffffff;
  overflow: hidden;
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.Get:hover {
  background: rgb(61, 106, 255);
  box-shadow: 0 0 30px 5px rgba(0, 142, 236, 0.815);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}

.Get:hover::before {
  -webkit-animation: sh02 0.5s 0s linear;
  -moz-animation: sh02 0.5s 0s linear;
  animation: sh02 0.5s 0s linear;
}

.Get::before {
  content: '';
  display: block;
  width: 0px;
  height: 86%;
  position: absolute;
  top: 7%;
  left: 0%;
  opacity: 0;
  background: #fff;
  box-shadow: 0 0 50px 30px #fff;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  -o-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

@keyframes sh02 {
  from {
    opacity: 0;
    left: 0%;
  }

  50% {
    opacity: 1;
  }

  to {
    opacity: 0;
    left: 100%;
  }
}

.Get:active {
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: box-shadow 0.2s ease-in;
  -moz-transition: box-shadow 0.2s ease-in;
  transition: box-shadow 0.2s ease-in;
}
</style>


<body>
    <!-- Navbar Start -->
    <header id="topnav" class="defaultscroll sticky" style="background-color: #253f60;">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
            </a>
            <!-- Logo End -->

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item mb-0">
                    <a href=""></a>
                </li>

                <li class="list-inline-item ps-1 mb-0">
                    <a href="{{ route('loginPage') }}"><button class="Get">Mulai Disini</button></a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="index.html" class="sub-menu-item">Home</a></li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="">Landing</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>

                                </ul>
                            </li>

                            <li>
                                <ul>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                        </ul>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Demos</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>

                                </ul>
                            </li>

                            <li>
                                <ul>

                                    <li>

                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>

                                    <li>

                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li>

                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li>

                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Components</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                </ul>
                            </li>

                            <li>
                                <ul>

                                </ul>
                            </li>

                            <li>
                                <ul>

                                </ul>
                            </li>

                            <li>
                                <ul>

                                </ul>
                            </li>

                            <li>
                                <ul>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                        <ul class="submenu">

                        </ul>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100">
        <div class="container">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="title-heading me-lg-4">
                        <h1 class="heading mb-3">Selamat Datang Di Halaman<span class="text-primary">E-learn</span> </h1>
                        <p class="para-desc text-muted">Disini kita menyediakan kelas bimbel online yang Diajarkan oleh guru yang sudah profesional</p>
                        <div class="mt-4">
                            <a href="page-contact-one.html" class="btn btn-primary mt-2 me-2"><i
                                    class="uil uil-envelope"></i> Get Started</a>
                            <a href="documentation.html" class="btn btn-outline-primary mt-2"><i
                                    class="uil uil-book-alt"></i> Documentation</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{ url('storage/Learningbro.png') }}" alt="" style="  padding: 5px;
                    width:90%;
                  ">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Partners start -->
    <section class="py-4 border-bottom border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="assets/images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="assets/images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="assets/images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="assets/images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="assets/images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="assets/images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Partners End -->

    <!-- How It Work Start -->
    <section class="section bg-light border-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Bagaimana Website Ini Bekerja ?</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Cara bekerja <span
                                class="text-primary fw-bold">E-learn</span> Dengan cara membeli/menyewa class dengan sekali membeli dapat mengakses sampai kapan pun tampa batas waktu yang di tentukan.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2">
                    <img src="{{ url('storage/Learning-amico.png') }}" alt="" style="width: 80%">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ms-lg-5">
                        <h5 class="title mb-4">Apa saja Yang Terdapat pada Website ini?</h5>
                        <p class="text-muted">Selesai pembelian anda dapat mengakses sebagian ini.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Anda dapat menerima materi yang sudah di sediakan oleh guru pengajar</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Anda dapat mengerjakan tugas sesuai materi yang anda baca pada saat itu</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Anda dapat mengerluarkan uang untuk membeli materi disini:V</li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- How It Work End -->

    <!-- Testi Start -->
    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h6>Siapa Saja Yang Mengerjakan Web ini?</h6>
                        <h4 class="title mb-4">Dalam Pengerjaan Project ini</h4>
                        <p class="text-muted para-desc mx-auto mb-0">project ini dikerjakan dengan <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12 mt-4">
                    <div class="tiny-three-item">
                        <div class="tiny-slide text-center">
                            <div class="client-testi rounded shadow m-2 p-4">
                                <img src="assets/images/client/amazon.svg"
                                    class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                <p class="text-muted mt-4">" It seems that only fragments of the original text remain
                                    in the Lorem Ipsum texts used today. "</p>
                                <h6 class="text-primary">- Thomas Israel</h6>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="client-testi rounded shadow m-2 p-4">
                                <img src="assets/images/client/google.svg"
                                    class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which
                                    is said to have originated in the 16th century. "</p>
                                <h6 class="text-primary">- Carl Oliver</h6>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="client-testi rounded shadow m-2 p-4">
                                <img src="assets/images/client/lenovo.svg"
                                    class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain
                                    letters appear more frequently than others. "</p>
                                <h6 class="text-primary">- Barbara McIntosh</h6>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="client-testi rounded shadow m-2 p-4">
                                <img src="assets/images/client/paypal.svg"
                                    class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual
                                    filler for German texts. "</p>
                                <h6 class="text-primary">- Jill Webb</h6>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="client-testi rounded shadow m-2 p-4">
                                <img src="assets/images/client/shopify.svg"
                                    class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These
                                    are usually used when a text is required. "</p>
                                <h6 class="text-primary">- Dean Tolle</h6>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="client-testi rounded shadow m-2 p-4">
                                <img src="assets/images/client/spotify.svg"
                                    class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back
                                    to a text composed by Cicero. "</p>
                                <h6 class="text-primary">- Christa Smith</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Testi End -->

    <!-- Pricing Start -->
    <section class="section">
        <div class="container">
            <div class="row mt-lg-4 align-items-center">
                <div class="col-lg-5 col-md-12 text-center text-lg-start">
                    <div class="section-title mb-4 mb-lg-0 pb-2 pb-lg-0">
                        <h4 class="title mb-4">Our Comfortable Rates</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                        <a href="https://1.envato.market/landrick" target="_blank" class="btn btn-primary mt-4">Buy
                            Now <span class="badge rounded-pill bg-danger ms-2">v4.7.0</span></a>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div class="ms-lg-5">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-12 px-md-0">
                                <div class="card pricing pricing-primary starter-plan shadow rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Starter</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">39</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Appointments</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 col-12 mt-4 pt-2 pt-sm-0 mt-sm-0 px-md-0">
                                <div class="card pricing pricing-primary bg-light shadow rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title name fw-bold text-uppercase mb-4">Professional</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">59</span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Full
                                                Access</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Source
                                                Files</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Free
                                                Appointments</li>
                                            <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Enhanced
                                                Security</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-4">Try it now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Pricing End -->

    <!-- FAQ n Contact Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0">How our <span class="text-primary">Landrick</span> work ?</h5>
                            <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts,
                                non-readability is of great importance: human perception is tuned to recognize certain
                                patterns and repetitions in texts.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> What is the main process open account ?</h5>
                            <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making a neutral judgement on the visual impact</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                            <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is
                                relatively realistic so that the layout impression of the final publication is not
                                compromised.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> Is <span class="text-primary">Landrick</span> safer to use with my
                                account ?</h5>
                            <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum',
                                which is said to have originated in the 16th century. Lorem Ipsum is composed in a
                                pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span
                                class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                        <a href="page-contact-two.html" class="btn btn-primary mt-4"><i class="uil uil-phone"></i>
                            Contact us</a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- FAQ n Contact End -->


    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="assets/images/logo-light.png" height="24" alt="">
                                </a>
                                <p class="mt-4">Start working with Landrick that can provide everything you need to
                                    generate awareness, drive traffic, connect.</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick"
                                            target="_blank" class="rounded"><i
                                                class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a>
                                    </li>
                                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes"
                                            target="_blank" class="rounded"><i class="uil uil-dribbble align-middle"
                                                title="dribbble"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes"
                                            target="_blank" class="rounded"><i class="uil uil-behance align-middle"
                                                title="behance"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes"
                                            target="_blank" class="rounded"><i
                                                class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/"
                                            target="_blank" class="rounded"><i class="uil uil-instagram align-middle"
                                                title="instagram"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes"
                                            target="_blank" class="rounded"><i class="uil uil-twitter align-middle"
                                                title="twitter"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in"
                                            class="rounded"><i class="uil uil-envelope align-middle"
                                                title="email"></i></a></li>
                                </ul><!--end icon-->
                            </div><!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Team</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Project</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Components</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Newsletter</h5>
                                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="foot-subscribe mb-3">
                                                <label class="form-label">Write your email <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" name="email" id="emailsubscribe"
                                                        class="form-control ps-5 rounded" placeholder="Your email : "
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-grid">
                                                <input type="submit" id="submitsubscribe" name="send"
                                                    class="btn btn-soft-primary" value="Subscribe">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Landrick. Design with <i
                                    class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/"
                                    target="_blank" class="text-reset">Shreethemes</a>.
                            </p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/images/payments/american-ex.png" class="avatar avatar-ex-sm"
                                        title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/images/payments/discover.png" class="avatar avatar-ex-sm"
                                        title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/images/payments/master-card.png" class="avatar avatar-ex-sm"
                                        title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/images/payments/paypal.png" class="avatar avatar-ex-sm"
                                        title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/images/payments/visa.png" class="avatar avatar-ex-sm"
                                        title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->


    <!-- Cookies Start -->

    <!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
    <!-- Cookies End -->


    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-4 border-bottom">
            <h5 id="offcanvasRightLabel" class="mb-0">
                <img src="assets/images/logo-dark.png" height="24" class="light-version" alt="">
                <img src="assets/images/logo-light.png" height="24" class="dark-version" alt="">
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="uil uil-times fs-4"></i></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="row">
                <div class="col-12">
                    <img src="assets/images/contact.svg" class="img-fluid d-block mx-auto" alt="">
                    <div class="card border-0 mt-4" style="z-index: 1">
                        <div class="card-body p-0">
                            <h4 class="card-title text-center">Login</h4>
                            <form class="login-form mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email"
                                                    name="email" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control ps-5"
                                                    placeholder="Password" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <p class="forgot-pass mb-0"><a href="auth-cover-re-password.html"
                                                    class="text-dark fw-bold">Forgot password ?</a></p>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Sign in</button>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account
                                                ?</small> <a href="auth-cover-signup.html"
                                                class="text-dark fw-bold">Sign Up</a></p>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas-footer p-4 border-top text-center">
            <ul class="list-unstyled social-icon social mb-0">
                <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank"
                        class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                        class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i
                            class="uil uil-envelope align-middle" title="email"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank"
                        class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
            </ul><!--end icon-->
        </div>
    </div>
    <!-- Offcanvas End -->


    <div class="offcanvas offcanvas-start shadow border-0" tabindex="-1" id="switcher-sidebar"
        aria-labelledby="offcanvasLeftLabel">
        <div class="offcanvas-header p-4 border-bottom">
            <h5 id="offcanvasLeftLabel" class="mb-0">
                <img src="assets/images/logo-dark.png" height="24" class="light-version" alt="">
                <img src="assets/images/logo-light.png" height="24" class="dark-version" alt="">
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="uil uil-times fs-4"></i></button>
        </div>
        <div class="offcanvas-body p-4 pb-0">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h6 class="fw-bold">Select your color</h6>
                        <ul class="pattern mb-0 mt-3">
                            <li>
                                <a class="color-list rounded color1" href="javascript: void(0);"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Primary"
                                    onclick="setColorPrimary()"></a>
                            </li>
                            <li>
                                <a class="color-list rounded color2" href="javascript: void(0);"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Green"
                                    onclick="setColor('green')"></a>
                            </li>
                            <li>
                                <a class="color-list rounded color3" href="javascript: void(0);"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"
                                    onclick="setColor('yellow')"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center mt-4 pt-4 border-top">
                        <h6 class="fw-bold">Theme Options</h6>

                        <ul class="text-center style-switcher list-unstyled mt-4">
                            <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light"
                                    onclick="setTheme('style-rtl')"><img src="assets/images/demos/rtl.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">RTL
                                        Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light"
                                    onclick="setTheme('style')"><img src="assets/images/demos/ltr.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">LTR
                                        Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark"
                                    onclick="setTheme('style-dark-rtl')"><img src="assets/images/demos/dark-rtl.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">RTL
                                        Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark"
                                    onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">LTR
                                        Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4"
                                    onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">Dark
                                        Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4"
                                    onclick="setTheme('style')"><img src="assets/images/demos/ltr.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">Light
                                        Version</span></a></li>
                            <li class="d-grid"><a href="https://shreethemes.in/landrick/dashboard/index.html"
                                    target="_blank" class="mt-4"><img src="assets/images/demos/admin.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">Admin
                                        Dashboard</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas-footer p-4 border-top text-center">
            <ul class="list-unstyled social-icon social mb-0">
                <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank"
                        class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                        class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i
                            class="uil uil-envelope align-middle" title="email"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank"
                        class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- Switcher End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/landing/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('assets/landing/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets/landing/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/plugins.init.js') }}"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('assets/landing/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc.
         -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


<!-- Mirrored from shreethemes.in/landrick/landing/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 04:17:58 GMT -->

</html>
