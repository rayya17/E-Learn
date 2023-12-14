@extends('layouts.layoutGuru')

@section('content')
    <style>
        .edit-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #33a797;
            border: none;
            color: #fff;
            padding: 18px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .edit-icon {
            width: 20px;
            height: 20px;
            fill: #ffffff;
            margin-right: 5px;
        }

        .oval-box {
            background-color: #1c865d;
            width: 75px;
            height: 50px;
            float: right;
            border-radius: 10px;
             margin-top: 45px; 
        }

        .card-body {
            padding: 10px;
        }

        .card-body h5 {
            text-align: center;
            color: #ffffff;
            font-size: 18px;
        }

        .card {
            width: 100%;
        }
          .green-bg {
        height: 40px; /* Sesuaikan tinggi hijau di atas card */
        background-color: #1c865d; /* Warna hijau */
    }
     .custom-img {
        width: 310px; /* Lebar foto */
        height: 390px; /* Tinggi foto */
        object-fit: cover; /* Memastikan foto tetap berbentuk 50 x 50 tanpa distorsi */
    }
    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Judul Tugas <span class="text-danger"></span></h2>
                        <ol></ol>
                    </div>
                </div>
            </section>
<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="portfolio-details-slider swiper">
                    <div class="align-items-center">
                        <img src="{{ asset('storage/tesfoto.png')}}" class="card-img-top custom-img" alt="foto default materi">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
<div class="col-lg-8">
    <div class="card" style="border: 1px solid #000; height: 400px;"> <!-- Sesuaikan tinggi card -->
        <div class="green-bg" style="height: 60px; padding: 5px;">
            <h4 class="card-title" style="color: rgb(255, 255, 255); margin: 0;">Deskripsi</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </li>
            </ul>
            <div class="card-footer"></div>
            <div class="oval-box">
                <div class="card-body">
                    <h5>harga</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
</div>             

 <hr style="border-top: 3px solid #000000;">

                    <!-- Navigation Tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-left" id="home-tab" data-toggle="tab" data-target="#mapel"
                                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"
                                style="font-size: 18px;">Materi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-left" id="profile-tab" data-toggle="tab" data-target="#tab2"
                                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"
                                style="font-size: 18px;">Tugas</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
<div class="tab-content">
    <!-- Detail Tab -->
    <div class="tab-pane fade show active" id="mapel" role="tabpanel" aria-labelledby="home-tab">
        <div class="semua text-center">
            <h2 class="mb-4"> Materi PDF</h2>
            <div class="card mb-3" style="width: 1010px; height: 50px; border: 1px solid #000;">
                <div class="card-body">
                    <h5 class="card-title">PDF Document</h5>
                    <!-- Add your PDF viewer or embed code here -->
                    <embed src="" type="" width="150%" height="50%" />
                </div>
            </div>
        </div>
    </div>



                        <!-- Ulasan Tab -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="text-center">
                                <h2 class="mb-4">Tugas</h2>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <table>
                                                            <thead id="example1">
                                                                <tr>
                                                                    <th scope="col" style="text-align: center;">No</th>
                                                                    <th scope="col" style="text-align: center;">Tugas</th>
                                                                    <th scope="col" style="text-align: center;">Deskripsi</th>
                                                                    <th scope="col" style="text-align: center;">Tanggal Mulai</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="text-align: center;">Mark nct</td>
                                                                    <td style="text-align: center;">Bank</td>
                                                                    <td style="text-align: center;">Mandiri</td>
                                                                    <td style="text-align: center;">Mandiri</td>
                                                                </tr>
                                                                <!-- Add more rows as needed -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Button -->
                        <button class="edit-button">
                            <div class="icon">
                                <i class="bi bi-pencil-fill"></i>
                                <div class="label">
                                </div>
                            </div>
                        </button>
                    </div>
            </section>
        </div>
    </main><!-- End #main -->
@endsection
