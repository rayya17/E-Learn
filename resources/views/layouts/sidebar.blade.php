<!DOCTYPE html>
<html lang="en">

<head>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dark mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, full calendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('adminTemplate/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminTemplate/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Global Stylesheets Bundle -->
    <link href="{{ asset('adminTemplate/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminTemplate/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Google tag -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>

    <script>
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    <style>
        /* Gaya Sidebar */
        #kt_app_sidebar {
            background-color: #262b37; /* Ganti dengan warna yang diinginkan */
            color: #ffffff; /* Warna teks di sidebar */
        }

        /* Gaya Menu Item */
        .menu-item {
            border-bottom: 1px solid #3b4254; /* Garis pembatas antar item menu */
        }

        /* Gaya Menu Link Aktif */
        .menu-link.active {
            background-color: #4c566a; /* Warna latar belakang item menu aktif */
            color: #ffffff; /* Warna teks item menu aktif */
        }
    </style>

    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <script src="path/to/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <!-- Theme mode setup on page load -->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!-- Page -->
        <div class="app-page flex-column" id="kt_app_page">
            <!-- Header -->
            <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
                <!-- Header container -->
                <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
                    <!-- Sidebar mobile toggle -->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                    </div>
                    <!-- Mobile logo -->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="index.html" class="d-lg-none">
                            <img width="300" src="{{ url('storage/logoh.png') }}" alt="">
                        </a>
                    </div>
                    <!-- Header wrapper -->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                        <!-- Menu wrapper -->
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <!-- Menu -->
                            <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                                <!-- Menu item -->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                    <a href="{{ route('Detailtugas', $materi->id) }}">
                                        <span class="menu-link"><span class="menu-title" style="font-size: 25px">Dashboards</span>
                                            <span class="menu-arrow d-lg-none"></span></span>
                                    </a>
                                </div>
                                <!-- Menu item -->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                    <a href="{{ route('HomePage') }}">
                                        <span class="menu-link"><span class="menu-title" style="font-size: 25px">Home</span>
                                            <span class="menu-arrow d-lg-none"></span></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Menu -->
                        </div>
                        <!-- Menu wrapper -->
                        <div class="mt-3">
                            <a href="" class="btn btn-success" onclick="history.back()">Kembali</a>
                        </div>
                        <!-- Navbar -->
                    </div>
                    <!-- Header wrapper -->
                </div>
                <!-- Header container -->
            </div>
            <!-- Header -->
            <!-- Wrapper -->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                @yield('content')
            </div>
            <!-- Wrapper -->
            <!-- Sidebar -->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!-- Logo -->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!-- Logo image -->
                    <a href="index.html">
                        <img width="300" src="{{ url('storage/logoh.png') }}" alt="">
                    </a>
                </div>
                <!-- Logo -->
                <!-- Sidebar menu -->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!-- Menu wrapper -->
                    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                        <!-- Scroll wrapper -->
                        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                            <!-- Menu -->
                            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                                <!-- Menu item -->
                                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                    <span class="menu-link"><span class="menu-icon"><i class="fa fa-pencil-alt"></i></span><span class="menu-title">Tugas</span><span class="menu-arrow"></span></span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <!-- Menu item -->
                                        <div class="menu-item">
                                            <!-- Menu link -->
                                            @foreach($tugas as $item)
                                                <a class="menu-link btn {{ request()->is('Kumpultugas/' . $item->id) ? 'active btn-primary' : 'btn-secondary' }}" href="{{ route('Kumpultugas', $item->id) }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-icon">
                                                        <i class="fas fa-book"></i> <!-- Font Awesome book icon -->
                                                    </span>
                                                    <span class="menu-title">{{ $item->tugas }}</span>
                                                </a>
                                            @endforeach
                                            <!-- End: Menu link -->
                                        </div>
                                        <!-- End: Menu item -->
                                    </div>
                                </div>

                            </div>
                            <!-- Menu -->
                        </div>
                        <!-- Scroll wrapper -->
                    </div>
                    <!-- Menu wrapper -->
                </div>
                <!-- Sidebar menu -->
            </div>
            <!-- Sidebar -->
            <script src="{{ asset('adminTemplate/plugins/global/plugins.bundle.js') }}"></script>
            <script src="{{ asset('adminTemplate/js/scripts.bundle.js') }}"></script>
            <!-- Global Javascript Bundle -->

            <!-- Custom Javascript(used for this page only) -->
            <script src="{{ asset('adminTemplate/js/widgets.bundle.js') }}"></script>
            <script src="{{ asset('adminTemplate/js/custom/widgets.js') }}"></script>
            <script src="{{ asset('adminTemplate/js/custom/apps/chat/chat.js') }}"></script>
            <script src="{{ asset('adminTemplate/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
            <script src="{{ asset('adminTemplate/js/custom/utilities/modals/create-app.js') }}"></script>
            <script src="{{ asset('adminTemplate/js/custom/utilities/modals/new-target.js') }}"></script>
            <script src="{{ asset('adminTemplate/js/custom/utilities/modals/users-search.js') }}"></script>
            <!-- Custom Javascript -->
        </body>
        </html>
