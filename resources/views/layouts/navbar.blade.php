<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GURU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/Admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/font-awesome.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/niceselect.css') }}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/jquery.fancybox.min.css') }}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/cube-portfolio.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/owl.carousel.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/animate.min.css') }}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/slicknav.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/magnific-popup.css') }}">

    <!-- Eduland Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/responsive.css') }}">

    <!-- Eduland Colors -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/colors/color1.css') }}">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        /* Add this to your stylesheet */
        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .toggle-sidebar .main-content {
            position: relative;
            top: 42px;
            left: 0;
            width: 100vw;
        }

        .row {
            margin-right: -10px;
            margin-left: -10px;
        }

        body {
            overflow-x: hidden;
        }

        /* .col-lg-3,
        .col-md-4 {
            /* Adjust the width of the sidebar as needed */
            flex: 0 0 25%;
            /* max-width: 25%;
        }

        .col-lg-9,
        .col-md-8 { */
            /* Adjust the width of the main content as needed */
            /* flex: 0 0 75%;
            max-width: 75%;
        }

        .single-course { */
            /* Add any necessary styling for your course cards */
            /* margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .course-body {
            flex: 1; Menyesuaikan tinggi secara otomatis untuk konten
        } */ */


        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333; /* Warna latar belakang header */
            /* color: white; */
            padding: 20px; /* Padding untuk memberikan ruang di sekitar teks header */
            text-align: center;
            box-shadow: 0px 4px 6px rgba(170, 167, 167, 0.1); /* Pusatkan teks header */
        }

        /* Gaya tambahan untuk memperpanjang header */
        .extended-header {
            height: 90px;
        }

        /* Gaya untuk elemen <thead> */
        thead {
            background-color: #4FA987; /* Warna latar belakang thead */
            border-radius: 15px; /* Border radius pada thead */
            color: white; /* Warna teks pada thead */
            height: 45px; /* Sesuaikan ketinggian thead sesuai kebutuhan Anda */
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            border-radius: 25px; /* Menambahkan radius pada bagian body dari card */
            margin-top: 10px;
            padding: 20px;
        }

        /* .btn{
          color: #ffffff;
          background-color:#4FA987;
          font-size: 14px;
        } */

        .container-card{
            padding-top: 10px;
            width: 350px;
        }

        .container-card .card{
            min-height: 400px;
            overflow: hidden;
        }

        .container-card .card .bg-image{
            width: 100%;
            height: 200px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px;
        }

        .container-card .card .bg-image .background{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .container-card .card .tengah{
            position: absolute;
            top: 130px
        }

        .container-card .card .tengah .profile{
            overflow: hidden;
            position: absolute;
            left: 14px;
            top: 21px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            border-radius: 100%;
        }

        .container-card .card .tengah .profile .rounded-circle{
            object-fit: cover;
            width: 60px;
            height: 60px;
        }

        .container-card .card .tengah .badge-class{
            position: absolute;
            right: 22px;
            top: 47px;
        }

        .container-card .card .tengah .badge-class .badge{
            width: 100%;
            height: 30px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        .container-card .card .text-card .title{
            margin-top: 2px;
            margin-bottom: 2px;
        }

        .container-card .card .text-card .desc{
            margin-top: 0px;
            padding-top: 0px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        {{-- @php
            $profile = \App\Models\Guru::where('user_id', Auth::user()->id)->firstOrFail();
        @endphp --}}

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">E-LEARN GURU</span>
            </a>
            {{-- <i class="bi bi-list toggle-sidebar-btn"></i> --}}
        </div><!-- End Logo -->

        {{-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar --> --}}

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                {{-- <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon--> --}}

                <li class="nav-item dropdown">

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" id="notificationIcon" style="margin-top: 3px; right: -50px;">
                            <i class="fa-regular fa-bell" id="bellIcon" style="font-size: 22px; color: #ffff; margin-right: 25px; position: relative;">
                                @if ($unreadNotificationsCount > 0)
                                    <span id="notif-count" class="badge seniman-badge bg-dark text-white" style="font-size: 10px;">{{ $unreadNotificationsCount }}</span>
                                @endif
                            </i>
                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    // Ambil token CSRF dari meta tag
                                    var csrfToken = $('meta[name="csrf-token"]').attr('content');

                                    // Menangani klik pada notifikasi
                                    $('.notification-item').on('click', function (e) {
                                        e.preventDefault();
                                        var notificationId = $(this).data('notification-id');
                                        var $notificationItem = $(this);

                                        // Lakukan AJAX untuk menandai notifikasi sebagai sudah dibaca
                                        $.ajax({
                                            url: '{{ route('notifDelete', ['id' => ':id']) }}'.replace(':id', notificationId),
                                            method: 'POST',
                                            // Sertakan token CSRF dalam header
                                            headers: {
                                                'X-CSRF-TOKEN': csrfToken,
                                            },
                                            success: function (response) {
                                                if (response.success) {
                                                    // Perbarui tampilan notifikasi di frontend
                                                    $('#notificationIcon #notif-count').text(response.unreadNotificationcount);

                                                    // Hapus notifikasi dari tampilan tanpa reload
                                                    $notificationItem.remove();
                                                }
                                            },
                                            error: function (error) {
                                                console.error(error);
                                            }
                                        });
                                    });
                                });
                            </script>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="min-width: 300px; max-height: 350px ; overflow-y: auto; margin-right: 20px !important; margin-left: -257px">
                            <li class="dropdown-header">
                                <span style="font-size: 20px;">Notifikasi</span>
                            </li>
                            <hr style="margin-bottom: 0px;">
                            <center>
                            @if (count($Notifikasi) > 0)
                                @foreach ($Notifikasi as $notifikasi)
                                    <li class="notification-item" data-notification-id="{{ $notifikasi->id }}">
                                        <div class="profile">
                                            @if ($notifikasi->user && $notifikasi->user->foto_profile)
                                                <img width="20px" height="20px" class="rounded-circle border me-2"
                                                    src="{{ $notifikasi->user->foto_profile }}" alt="{{ $notifikasi->user->name }}">
                                            @else
                                                <!-- Gambar placeholder atau logika alternatif jika foto profil tidak tersedia -->
                                                <img width="50px" height="50px" class="rounded-circle border me-2"
                                                    src="storage/default/defaultprofile.jpeg" alt="Placeholder">
                                            @endif
                                        </div>
                                        <div class="notif-text w-100">
                                            <div class="username">
                                                <p class="mb-1">{{ $notifikasi->title }}</p>
                                            </div>
                                            <div class="message">{{ $notifikasi->message }}</div>
                                            <div class="date">
                                                <p class="mb-0">{{ $notifikasi->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                @endforeach
                            @else
                                <li class="no-notif pt-3">
                                    <p class="mb-0">Tidak ada notifikasi</p>
                                </li>
                            @endif
                        </center>
                        </ul>
                    </li>


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('storage/profile/' . Auth::user()->foto_user) }}" width="40px" height="50px" alt="Profile" class="rounded-circle" style="object-fit: cover;">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a>
                    <!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>{{ Auth::user()->role }}</span>
                        </li>
                        <li>
                        <a class="dropdown-item d-flex align-items-center" href="profileguru">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>


                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center" style="border: none; background: none; cursor: pointer;">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </button>
                            </form>
                        </li>


                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->



    <!-- ======= Sidebar ======= -->
    {{-- <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboardguru') ? '' : 'collapsed' }}"
                    href="{{ url('dashboardguru') }} ">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('materi') ? '' : 'collapsed' }}" href="{{ url('materi') }} ">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Materi</span>
                </a>

            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Pengumpulantugas') ? '' : 'collapsed' }}" href="{{ route('Pengumpulantugas') }}">
                    <i class="bi bi-bar-chart"></i><span>Pengumpulan Tugas</span>
                </a>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Penarikansaldo') ? '' : 'collapsed' }}" href="{{ url ('Penarikansaldo') }}">
                    <i class="bi bi-bar-chart"></i><span>Penarikan Saldo</span>
                </a>

            </li>
        </ul>

    </aside><!-- End Sidebar-->  --}}
    <div class="main-content py-3 px-3 mt-1 ">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- ======= Footer ======= -->
    {{-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer --> --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/Admin/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/Admin/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/Admin/tinymce/tinymce.min.js"') }}"></script>
    <script src="{{ asset('assets/Admin/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/Admin/js/main.js') }}"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->


</body>

</html>
