<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">


<!-- Mirrored from bootstrapdemos.wrappixel.com/spike/dist/main/authentication-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 03:23:09 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/regis.css') }}" />

    <title>E-Learn</title>
</head>

<style>

</style>

<body>
    <!-- Preloader -->
    <div id="main-wrapper" class="p-0 bg-white">
        <div class="auth-login position-relative overflow-hidden d-flex align-items-center justify-content-center px-6 px-xxl-0 rounded-3"
            style="height: calc(100vh - 20px);">
            <div class="auth-login-wrapper card mb-0 container position-relative z-1 h-100" data-simplebar
                style="max-height: 770px;">
                <div class="card-body">
                    <a href="index.html" class="">
                        <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-dark.svg"
                            class="light-logo" alt="Logo-Dark" />
                        <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-light.svg"
                            class="dark-logo" alt="Logo-light" />
                    </a>
                    <div class="row align-items-center justify-content-around pt-7 pb-5">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                            <div class="text-center text-lg-start">
                                <img src="{{ url('storage/login-security.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <h2 class="mb-6 fs-8 fw-bolder">Selamat Datang Di E-Learn</h2>
                            <p class="text-dark fs-4 mb-7">Silahkan Register Disini</p>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="container">
                                        <form action="{{ route('createregisguru') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row" id="pills-home" aria-labelledby="pills-home-tab"
                                                tabindex="0">
                                                <div class="form-group">
                                                    <label for="text-name"
                                                        class="form-label text-dark fw-bold">Name</label>
                                                    <input type="text" class="form-control py-6" id="text-name"
                                                        value="{{ old('name') }}" name="name"
                                                        class="form-control @error('name')is-invalid @enderror">
                                                    @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="text-email" class="form-label text-dark fw-bold">Email
                                                        Address</label>
                                                    <input type="email" class="form-control py-6" id="text-email"
                                                        value="{{ old('email') }}" name="email"
                                                        class="form-control @error('email')is-invalid @enderror">
                                                    @error('email')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="text-password"
                                                            class="form-label text-dark fw-bold">Password</label>
                                                        <input type="password" class="form-control py-6"
                                                            id="text-password" name="password"
                                                            class="form-control @error('password')is-invalid @enderror">
                                                        @error('password')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="text-confirm-pwd"
                                                            class="form-label text-dark fw-bold">Confirm
                                                            Password</label>
                                                        <input type="password" class="form-control py-6"
                                                            id="text-confirm-pwd" name="re-password"
                                                            class="form-control @error('re-password')is-invalid @enderror">
                                                        @error('re-password')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div style="margin-left:380px; margin-top:4px;">
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"
                                                        style="background-color: rgba(255, 255, 255, 0.20);">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link " id="pills-profile-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                                type="button" role="tab"
                                                                aria-controls="pills-profile">Selanjutnya</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                            <div class="tab-pane fade row" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab" tabindex="0">
                                                <div class="d-flex">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text-confirm-pwd"
                                                                    class="form-label text-dark fw-bold">Foto
                                                                    Anda</label>
                                                                <input type="file" class="form-control py-6"
                                                                    id="text-confirm-pwd" name="foto_profile" id="foto_profile"
                                                                    class="form-control">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="text-confirm-pwd"
                                                                    class="form-label text-dark fw-bold">No
                                                                    Telepon</label>
                                                                <input type="number" class="form-control py-6"
                                                                    id="text-confirm-pwd" name="no_telepon"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="phone"
                                                                class="form-label text-dark fw-bold">Terakhir
                                                                pendidikan</label>
                                                            <input type="text" name="pendidikan" class="form-control"
                                                                id="pendidikan" placeholder="Pendidikan Terakhir">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group"
                                                            style="margin-left: 10px; width: 232px;">
                                                            <label for="phone"
                                                                class="form-label text-dark fw-bold">Tanggal lahir</label>
                                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="text-confirm-pwd"
                                                        class="form-label text-dark fw-bold">Foto Sertifikat</label>
                                                    <input type="file" class="form-control py-6"
                                                        id="foto_sertifikat" name="foto_sertifikat" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <label for="text-confirm-pwd"
                                                        class="form-label text-dark fw-bold">Foto Ktp</label>
                                                    <input type="file" class="form-control py-6"
                                                        id="foto_ktp" name="foto_ktp" class="form-control">

                                                </div>
                                                <div style="margin-left:300px; margin-top:4px;">
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"
                                                        style="background-color: rgba(255, 255, 255, 0.20);">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link " id="pills-home-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-home"
                                                                type="button" role="tab"
                                                                aria-controls="pills-home">Sebelumnya</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button class="btn btn-success  w-100 mb-7 mt-5 rounded-pill"
                                                    type="submit">Daftar</button>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="fs-3 mb-0 fw-medium">Already have an Account?</p>
                                                <a class="text-primary fw-bold ms-2 fs-3"
                                                    href="{{ route('loginPage') }}">Sign In</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Import Js Files -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Initialize Bootstrap tabs
                    var pillsTab = new bootstrap.Tab(document.getElementById('pills-home-tab'));
                    pillsTab.show();

                    document.getElementById('pills-profile-tab').addEventListener('click', function() {
                        toggleTabVisibility('pills-home', false);
                        toggleTabVisibility('pills-profile', true);
                        // Simpan status tab yang aktif di localStorage
                        localStorage.setItem('activeTab', 'pills-profile');
                    });

                    document.getElementById('pills-home-tab').addEventListener('click', function() {
                        toggleTabVisibility('pills-home', true);
                        toggleTabVisibility('pills-profile', false);
                        // Simpan status tab yang aktif di localStorage
                        localStorage.setItem('activeTab', 'pills-home');
                    });

                    // Periksa localStorage saat halaman dimuat ulang
                    var activeTab = localStorage.getItem('activeTab');
                    if (activeTab) {
                        var tabToShow = activeTab === 'pills-profile' ? 'pills-profile' : 'pills-home';
                        toggleTabVisibility(tabToShow, true);
                        toggleTabVisibility(tabToShow === 'pills-home' ? 'pills-profile' : 'pills-home', false);
                    }

                    function toggleTabVisibility(tabId, show) {
                        var tabElement = document.getElementById(tabId);
                        var formElement = tabElement.querySelector('.your-form-selector'); // Ganti dengan selektor formulir Anda
                        if (show) {
                            tabElement.classList.remove('d-none'); // Remove 'd-none' class
                            formElement.style.display = 'block'; // Tampilkan formulir
                        } else {
                            tabElement.classList.add('d-none'); // Add 'd-none' class
                            formElement.style.display = 'none'; // Sembunyikan formulir
                        }
                    }
                });
            </script>


            <script src="{{ asset('assets/regis/js/jqueri.min.js') }}"></script>
            <script src="{{ asset('assets/regis/js/app.min.js') }}"></script>
            <script src="{{ asset('assets/regis/js/app.init.js') }}"></script>
            <script src="{{ asset('assets/regis/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/regis/js/simplebar.min.js') }}"></script>
            <script src="{{ asset('assets/regis/js/sidebarmenu.js') }}"></script>
            <script src="{{ asset('assets/regis/js/theme.js') }}"></script>

</body>
<html>
