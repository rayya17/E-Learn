<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 <!-- Favicons -->
 <link href="assets/img/favicon.png" rel="icon">
 <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.gstatic.com" rel="preconnect">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="{{ asset('assets/Admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/Admin/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/Admin/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/Admin/quill/quill.snow.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/Admin/quill/quill.bubble.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/Admin/remixicon/remixicon.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/Admin/simple-datatables/style.css') }}" rel="stylesheet">
 <script src="{{ asset('assets/Admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


  {{-- JQuery --}}
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

 <!-- Template Main CSS File -->
 <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
      thead {
            background-color: #4FA987;
            border-radius: 25px; /* Border radius pada thead */
            color: white; /* Warna teks pada thead */
            height: 50px; /* Sesuaikan ketinggian thead sesuai kebutuhan Anda */
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            border-radius: 25px; /* Menambahkan radius pada bagian body dari card */
            margin-top: 0px;
            padding: 20px;
        }

        #example1 {
          /* border: 2px solid rgb(0, 255, 136); */
          padding: 10px;
          border-radius: 30px;
        }

        .nav-item.dropdown {
            position: relative;
        }

        .dropdown-menu.notifications {
            width: 300px;
            max-height: 400px;
            overflow-y: auto;
        }

        .notification-item {
            display: flex;
            align-items: center;
            padding: 10px;
            cursor: pointer;
        }

    .notification-item:hover {
        background-color: #f8f9fa;
    }

    .profile img {
        border-radius: 50%;
    }

    .notif-text {
        flex-grow: 1;
        margin-left: 10px;
    }

    .notif-text .username {
        font-weight: bold;
    }

    .notif-text .message {
        color: #555;
        margin-top: 5px;
        font-size: 13px;
    }

    .notif-text .date {
        color: #777;
        font-size: 12px;
    }

    .no-notif {
        text-align: center;
        padding: 10px;
    }

    .badge.seniman-badge {
        position: absolute;
        top: -1px;
        right: -9px;
    }

    .header-nav .profile {
        min-width: 35px;
        padding-bottom: 0;
        top: 8px !important;
    }

    .dropdown-menu .dropdown-header, .dropdown-menu .dropdown-footer {
        text-align: center;
        font-size: 15px;
        padding: 0px 29px;
    }
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">

  </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn" style="color: #ffff"></i>
    </div><!-- End Logo -->

    {{-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> --}}

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

      <!-- End Search Icon-->

        {{-- <div class="notif"> --}}
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" id="notificationIcon">
                    <i class="fa-regular fa-bell" id="bellIcon">
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
                                e.preventDefault(); // Menghentikan tindakan default dari tautan
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

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="min-width: 245px; max-height: 300px; overflow-y: auto;">
                    <li class="dropdown-header">
                        <h5>Notifikasi</h5>
                    </li>
                    <hr style="margin-bottom: 0px;">
                    @if (count($Notifikasi) > 0)
                        @foreach ($Notifikasi as $notifikasi)
                            <li class="notification-item" data-notification-id="{{ $notifikasi->id }}">
                                <div class="profile">
                                    @if ($notifikasi->sender->foto_user)
                                        <img width="50px" height="50px" class="rounded-circle border me-2"
                                            src="{{ asset('storage/profile/' . $notifikasi->sender->foto_user) }}" alt="{{ $notifikasi->sender->name }}">
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
                </ul>
                <!-- End Notification Dropdown Items -->
                <!-- End Notification Dropdown Items -->
            </li>
            <!-- End Notification Nav -->
        {{-- </div> --}}

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color: #ffff">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              <span>{{ Auth::user()->role }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="profileguru">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li> --}}

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
{{-- admin --}}
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item ">
                <a class="nav-link {{ request()->is('Dashboardadmin') ? '' : 'collapsed' }}"  href="{{ url('Dashboardadmin') }} " >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="padding-right: 8px; width: 30px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                      </svg>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Components Nav -->
            <li class="nav-item">
                <a class="nav-link {{ request()->is('calonguru') ? '' : 'collapsed' }}" href="{{ url('calonguru') }} ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="padding-right: 8px; width: 30px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                      </svg>
                    <span>Persetujuan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Profileguru') ? '' : 'collapsed' }}" href="{{ url('Profileguru') }} ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="padding-right: 8px; width: 30px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                      </svg>
                    <span>Profile guru</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  {{ request()->is('Pengajuandana') ? '' : 'collapsed' }}" href="{{ url('Pengajuandana') }} ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="padding-right: 8px; width: 30px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                      </svg>
                    <span>Pengajuan</span>
                </a>
            </li>
        </ul>
    </aside>

       <!-- End Blank Page Nav -->

    </ul>
  </aside><!-- End Sidebar-->

  <div class="main-content py-3 px-3">
    <div class="container-fluid">
      @yield('content')
    </div>
</div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/Admin/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{ asset('assets/Admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/Admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/Admin/chart.js/chart.umd.js')}}"></script>
<script src="{{ asset('assets/Admin/echarts/echarts.min.js') }}"></script>
<script src="{{asset('assets/Admin/quill/quill.min.js')}}"></script>
<script src="{{ asset ('assets/Admin/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/Admin/tinymce/tinymce.min.js"')}}"></script>
<script src="{{ asset('assets/Admin/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/Admin/js/main.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>
