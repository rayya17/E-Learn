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
  border: 1px solid rgb(255, 255, 255);
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
  background: rgb(72, 161, 107);
  box-shadow: 0 0 30px 5px rgba(245, 247, 248, 0.815);
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
    <header id="topnav" class="defaultscroll sticky" style="background-color: #4FA987;">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                <img src="{{ url('storage/1704554304108.png') }}" height="24" class="logo-dark-mode" alt="">
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
                    <a href="{{ route('loginPage') }}"><button class="Get">Masuk/Daftar</button></a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="#beranda" class="sub-menu-item">Home</a></li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="#about">Tentang Kami</a>
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
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a data-toggle="modal" data-target="#myModal2">kebijakan Privacy</a>
                        <ul class="submenu">
                        </ul>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="" data-toggle="modal" data-target="#myModal">FAQ</a>
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

                    {{-- <li class="has-submenu parent-parent-menu-item">
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
                    </li> --}}

                    {{-- <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                        <ul class="submenu">

                        </ul>
                    </li> --}}
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
                        <h1 class="heading mb-3" id="beranda">Selamat Datang Di Halaman<span class="text" style="color: #4FA987">E-learn</span> </h1>
                        <p class="para-desc text-muted">Selamat datang di bimbel online kami, tempat di mana pembelajaran menjadi menyenangkan dan efektif!,
                     </p>
                     <div>
                            <button href="{{ route('loginPage') }}" class="btn btn-success">Kunjungi</button>
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

    <!-- Partners End -->

    <!-- How It Work Start -->
    <section class="section bg-light border-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4" id="about">Tentang Kami</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Website<span
                                class="text-primary fw-bold">E-learn</span>
                              ini memiliki beberapa fitur dan proses yang dirancang untuk memberikan pengalaman belajar yang optimal bagi siswa SMA/MA. Hanya dengan
                            Anda membeli kelas anda bisa mengakses kelas sampai kapanpun tanpa batas waktu. </p>

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
                        {{-- <p class="text-muted">Selesai pembelian anda dapat mengakses sebagian ini.</p> --}}
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle" style="color: #4FA987"></i></span>Siswa dapat memilih kursus atau materi pelajaran yang ingin mereka pelajari. </li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle" style="color: #4FA987"></i></span>Platform ini menyediakan fitur untuk berinteraksi dengan guru atau tutor melalui komentar
                                         yang disediakan setelah anda mengakses materi kelas tersebut. Ini memungkinkan siswa untuk mengajukan pertanyaan atau mendapatkan klarifikasi tentang materi pelajaran.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2" ><i
                                        class="uil uil-check-circle align-middle" style="color: #4FA987"></i></span>Siswa diberikan tugas dan latihan untuk memastikan pemahaman konsep. Hasilnya dapat diperiksa secara otomatis atau oleh guru </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- How It Work End -->

    <!-- Pricing Start -->
    {{-- <section class="section">
        <div class="container">
            <div class="row mt-lg-4 align-items-center">
                <div class="col-lg-5 col-md-12 text-center text-lg-start">
                    <div class="section-title mb-4 mb-lg-0 pb-2 pb-lg-0">
                        <h4 class="title mb-4">Kunjungi Kelas Kami</h4>
                        <p class="text-muted para-desc mx-auto mb-0"> <span
                                class="text-primary fw-bold">E-Learn</span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p> --}}
                        {{-- <a href="https://1.envato.market/landrick" target="_blank" class="btn mt-4" style="background-color:
                        #4FA987;color: #fff">Buy
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
                                        <a href="javascript:void(0)" class="btn mt-4" style="background-color: #4FA987;color: #fff">Get Started</a>
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
                                        <a href="javascript:void(0)" class="btn mt-4" style="background-color: #4FA987;color: #fff">Try it now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section> --}}
    <!--end section-->
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
                            <h5 class="mt-0"> Apa itu website Bimbingan Online?</h5>
                            <p class="answer text-muted mb-0">Bimbingan online, atau sering disebut bimbel online, merujuk pada bentuk bantuan belajar atau pembimbingan yang disampaikan melalui platform online atau internet. Ini mencakup berbagai layanan pembelajaran, mulai dari bimbingan belajar akademis hingga pelatihan keterampilan tertentu.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> Konsistensi dan Ketersediaan Materi</h5>
                            <p class="answer text-muted mb-0">Materi pembelajaran biasanya tetap tersedia untuk diakses kapan saja. Ini memungkinkan siswa untuk meriview materi atau mencari bantuan tambahan setiap saat.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> Bagaimana siswa mengakses bimbingan online?</h5>
                            <p class="answer text-muted mb-0">Siswa dapat mengakses bimbingan online melalui platform daring, seperti situs web atau aplikasi khusus, menggunakan perangkat seperti komputer, tablet, atau ponsel pintar.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> Bimbingan Online lebih fleksibel</h5>
                            <p class="answer text-muted mb-0">bimbingan online sering kali lebih fleksibel karena memungkinkan siswa untuk belajar sesuai dengan jadwal mereka sendiri dan dari mana saja dengan koneksi internet.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- FAQ n Contact End -->


    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-8">
                                <a href="#" class="logo-footer">
                                    <img src="assets/images/logo-light.png" height="24" alt="">
                                </a>

                                <p class="mt-4">Terima kasih telah mengunjungi kami! Temukan lebih banyak tentang layanan kami di bagian atas halaman.</p>
                                {{-- <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
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
                                </ul><!--end icon--> --}}
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0 mx-auto">
                              <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="#about" class="text-foot" style="color: #ffffff"><i
                                                class="uil uil-angle-right-b me-1"></i> tentang kami</a></li>

                                    <li><a href="#beranda" class="text-foot" style="color: #ffffff"><i
                                                class="uil uil-angle-right-b me-1"></i>Blog</a></li>
                                    <li><a href="{{ Route('loginPage') }}" class="text-foot" style="color:#ffffff"><i
                                                class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                </ul>
                            </div><!--end col-->



                          <!--end col-->

                                </div>
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
                                </script> E-learn. Design with <i
                                    class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/"
                                    target="_blank" class="text-reset">E-learn Group</a>.
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
  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Header Modal -->
            <div class="modal-header">
                <h4 class="modal-title">FAQs</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Isi Modal -->
            <div class="modal-body" style="max-height: 450px; overflow-y: scroll;">
                <h6>Bagaimana cara menggunakan website ini?</h6>
                <p>Untuk menggunakan website bimbingan online kami, Anda perlu melakukan langkah-langkah berikut:</p>
                <ol>
                    <li>Lakukan pendaftaran sebagai pemateri/siswa dan masing-masing akan diarahkan ke formulir pendaftaran dan anda mengisi formulir tersebut</li>
                    <li>Khusus untuk menjadi Pemateri Anda harus memenuhi syarat-syarat pendaftaran dan setelah anda melakukan pendaftaran
                        anda tidak langsung diarahkan ke halaman anda, anda perlu menunggu persetujuan dari Admin terlebih Dahulu.
                    </li>
                    <li>Pemateri juga bisa menambahkan materi atau tugas.</li>
                    <li>untuk siswa anda hanya perlu melakukan pendaftaran dan mengisi formulir pendaftaran dengan baik.</li>
                    <li>agar bisa mengakses materi siswa perlu melakukan pembayaran terlebih dahulu</li>
                </ol>
                <h6>Bagaimana cara membuat akun di website ini?</h6>
                <p>Untuk membuat akun, Anda akan diarahkan terlebih dahulu ke halaman login/register, di mana Anda akan diberikan 2 pilihan, yaitu daftar sebagai Permateri/siswa. Isi informasi yang diperlukan, seperti nama, alamat, email, dan kata sandi, dan ikuti langkah-langkah yang diberikan.</p>
                <h6>Apa keuntungan menggunakan antrian makanan online?</h6>
                <p>Materi pelajaran terstruktur dan disajikan dengan cara yang mudah dipahami.</p>
                <p>Siswa dapat mengakses bimbel online dari mana saja, kapan saja, asalkan memiliki koneksi internet. Ini memberikan fleksibilitas waktu dan lokasi yang tinggi, memungkinkan belajar sesuai jadwal yang paling nyaman bagi siswa.</p>
                <p>Bimbel online dapat menjadi pilihan yang lebih ekonomis daripada bimbel tradisional karena mengurangi biaya transportasi dan penginapan.</p>

            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Header Modal -->
            <div class="modal-header">
                <h4 class="modal-title">Kebijakan Privasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Isi Modal -->
            <div class="modal-body" style="max-height: 450px; overflow-y: scroll;">
                <h6>Syarat dan Ketentuan</h6>
                <p>Selamat datang di Website E-Learn.</p>
                <p>Ketentuan dan Syarat penggunaan ini menguraikan aturan dan peraturan untuk penggunaan situs web milik Company Name, yang terletak di website.com. Dengan mengakses situs web ini, kami menganggap Anda menerima ketentuan dan syarat ini. Jangan lanjutkan menggunakan Website Name jika Anda tidak setuju dengan semua ketentuan dan syarat yang tertera di halaman ini.</p>
                <h6>Terminologi</h6>
                <p>Terminologi berikut berlaku untuk Ketentuan dan Syarat, Pernyataan Privasi, dan Pemberitahuan Disclaimer ini, serta semua Perjanjian: "Klien", "Anda", dan "Pemilik" mengacu pada Anda, orang yang masuk ke situs web ini, dan mematuhi ketentuan dan syarat perusahaan. "Perusahaan", "Kami", "Kami", "Kami", dan "Kita" mengacu pada perusahaan kami. "Pihak", "Pihak-pihak", atau "Kita", mengacu pada Klien dan kami bersama-sama. Semua istilah mengacu pada penawaran, penerimaan, dan pertimbangan pembayaran yang diperlukan untuk melakukan proses bantuan kami kepada Klien dengan cara yang paling sesuai untuk tujuan ekspres memenuhi kebutuhan Klien dalam penyediaan layanan yang dinyatakan Perusahaan, sesuai dengan dan tunduk pada hukum yang berlaku di Belanda. Penggunaan istilah di atas atau sebagai serupa dan oleh karena itu mengacu pada hal yang sama, baik dalam bentuk tunggal, jamak, huruf kapital, dan/atau "dia" atau "mereka", dianggap sejalan dengan konteks dan interpretasi.
                <h6>Cookies</h6>
                <p>Kami menggunakan cookies. Dengan mengakses Website Name, Anda setuju untuk menggunakan cookies sesuai dengan kebijakan privasi Company Name. Sebagian besar situs web interaktif menggunakan cookies untuk memungkinkan kami mengambil detail fungsionalitas area tertentu agar lebih mudah bagi orang yang mengunjungi situs web kami. Beberapa mitra afiliasi/iklan kami juga dapat menggunakan cookies.</p>
                <h6>Lisensi</h6>
                <p>Kecuali dinyatakan lain, Company Name dan/atau pemilik hak kekayaan intelektual milik semua materi di website E-learn. Semua hak kekayaan intelektual dilindungi. Anda dapat mengaksesnya dari website dalam ketentuan dan syarat ini. Penggunaan dari website E-learn adalah untuk penggunaan pribadi Anda sendiri yang tunduk pada pembatasan yang ditetapkan. Anda tidak boleh:</p>
                <ol>
                    <li>Memublikasikan ulang materi dari Website E-Learn.</li>
                    <li>Menjual, menyewakan, atau mensublisensikan materi dari Website E-Learn.</li>
                    <li>Menggandakan atau menyalin materi dari Website E-Learn.</li>
                    <li>Mendistribusikan konten dari Website E-Learn.</li>
                </ol>
                <p>Perjanjian ini dimulai pada tanggal ini.</p>
                <h6>Opini dan Informasi</h6>
                <p>Bagian-bagian dari situs web ini memberikan kesempatan bagi pengguna untuk memposting dan bertukar opini dan informasi di area tertentu dari situs web. Company Name tidak menyaring, mengedit, memublikasikan, atau meninjau Komentar sebelum keberadaan mereka di situs web. Komentar tidak mencerminkan pandangan dan pendapat Company Name, agen-agennya, dan/atau afiliasinya. Komentar mencerminkan pandangan dan pendapat orang yang memposting pandangan dan pendapat mereka.</p>
                <p>Sejauh yang diizinkan oleh hukum yang berlaku, Company Name tidak akan bertanggung jawab atas Komentar atau atas setiap tanggung jawab, kerusakan, atau biaya yang ditimbulkan dan/atau diderita sebagai akibat dari penggunaan, penulisan, atau tampilan Komentar di situs web ini. Komentar mengandung unsur yang mengganggu, ofensif, atau menyebabkan pelanggaran terhadap Ketentuan dan Syarat, Company Name berhak memonitor semua Komentar dan menghapus Komentar yang dianggap tidak sesuai dengan syarat ini.</p>
                <p>Anda menjamin dan mewakili bahwa Anda berhak memposting Komentar di situs web kami dan memiliki semua lisensi dan persetujuan yang diperlukan untuk melakukannya. Komentar tidak melanggar hak kekayaan intelektual apa pun, termasuk tanpa batasan hak cipta, paten, atau merek dagang dari pihak ketiga. Komentar tidak mengandung materi yang fitnah, pencemaran nama baik, ofensif, cabul, atau materi ilegal lainnya yang merupakan pelanggaran privasi. Komentar tidak akan digunakan untuk menyulut atau mempromosikan bisnis, kegiatan komersial, atau kegiatan ilegal.</p>
                <p>Dengan ini Anda memberikan kepada Company Name lisensi non-eksklusif untuk menggunakan, memproduksi, mengedit, dan memberikan izin kepada pihak lain untuk menggunakan, mereproduksi, dan mengedit setiap komentar Anda dalam bentuk, format, atau media apa pun.</p>
                <h6>Hyperlink ke Konten Kami</h6>
                <p>Organisasi berikut dapat membuat tautan ke Website kami tanpa persetujuan tertulis sebelumnya:</p>
                <ul>
                    <li>Badan pemerintah</li>
                    <li>Mesin pencari</li>
                    <li>Organisasi berita</li>
                </ul>
                <p>Distributor direktori online dapat membuat tautan ke Website kami dengan cara yang sama seperti mereka menghubungkan ke situs web bisnis terdaftar lainnya; dan Bisnis Terakreditasi dalam seluruh sistem kecuali organisasi nirlaba yang meminta sumbangan, mal pusat pembelanjaan amal, dan kelompok penggalangan dana amal yang mungkin tidak menghubungkan kesitus web kami. Organisasi-organisasi ini dapat menghubungkan ke halaman utama kami, publikasi, atau informasi lainnya di Website asalkan tautan: (a) tidak dalam cara apa pun yang menyesatkan; (b) tidak secara salah mengimplikasikan sponsor, dukungan, atau persetujuan dari pihak yang menghubungkan dan produk dan/atau layanannya; dan (c) sesuai dengan konteks situs pihak yang menghubungkan.</p>
                <p>Kami dapat mempertimbangkan dan menyetujui permintaan tautan lain dari jenis organisasi berikut:</p>
                <ul>
                    <li>Sumber informasi konsumen dan/atau bisnis yang dikenal secara umum</li>
                    <li>Situs komunitas dot.com</li>
                    <li>Asosiasi</li>
                </ul>
            </div>

        </div>
    </div>
</div>

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
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i class="bi bi-arrow-up"></i></a>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- jQuery (diperlukan untuk Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from shreethemes.in/landrick/landing/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 04:17:58 GMT -->

</html>
