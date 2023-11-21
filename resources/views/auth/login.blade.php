<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">


<!-- Mirrored from bootstrapdemos.wrappixel.com/spike/dist/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 03:23:56 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/login.css') }}" />

    <title>Spike Bootstrap Admin</title>
</head>

<body>
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
                            <h2 class="mb-6 fs-8 fw-bolder">Welcome to Spike Admin</h2>
                            <p class="text-dark fs-4 mb-7">Your Admin Dashboard</p>
                            <form action="{{ route('loginproses') }}" method="POST">
                                @csrf
                                <div class="mb-7">
                                    <label for="exampleInputEmail1" class="form-label text-dark fw-bold">Email
                                        Address</label>
                                    <input type="email" class="form-control py-6" id="email"
                                        placeholder="Masukan email yang valid" name="email">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-9">
                                    <label for="exampleInputPassword1"
                                        class="form-label text-dark fw-bold">Password</label>
                                    <input type="password" class="form-control py-6" id="password"
                                        placeholder="Masukan password" name="password">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-7 pb-1">
                                    <div class="form-check">
                                        <input class="form-check-input primary" type="checkbox" value=""
                                            id="flexCheckChecked" checked>
                                        <label class="form-check-label text-dark fs-3" for="flexCheckChecked">
                                            Remeber this Device
                                        </label>
                                    </div>
                                    <a class="text-primary fw-medium fs-3 fw-bold"
                                        href="authentication-forgot-password.html">Forgot Password ?</a>
                                </div>
                                <button class="btn btn-success w-100 mb-7 mt-5 rounded-pill"
                                    type="submit">Login</button>
                                <div class="d-flex align-items-center">
                                    <p class="fs-3 mb-0 fw-medium">New to Spike?</p>
                                    <a class="text-primary fw-bold ms-2 fs-3" href="{{ route('registerPage') }}">Create
                                        an account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Js Files -->
    <script src="{{ asset('assets/js/jqueri.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>


<!-- Mirrored from bootstrapdemos.wrappixel.com/spike/dist/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 03:23:56 GMT -->

</html>
