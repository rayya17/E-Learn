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
                            @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                           @endif
                           @if (session()->has('status'))
                           <div class="alert alert-success">
                            {{ session()->get('status')}}
                           @endif
                            <h2 class="mb-6 fs-8 fw-bolder" style="">Lupa Password?</h2>
                            <p class="text-dark fs-4 mb-7">Masukkan Alamat Email Anda</p>
                            <form action="{{ route('password.email') }}" method="post">
                                @csrf
                               <div class="row text-start">
                                  <div class="col-lg-12">
                                     <div class="form-group">
                                           <label for="email" class="form-label">Email</label>
                                           <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder=" ">
                                     </div>
                                  </div>
                               </div>
                               <div class="d-flex justify-content-end w-100 mb-7 mt-4 rounded-pill ">
                                   <button type="submit" value="Request Password Reset" class="btn btn-success ">Kirim</button>
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
