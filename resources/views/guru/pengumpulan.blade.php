@extends('layouts.layoutGuru')

@section('content')
    <style>
        /* Custom CSS for button styling */
        .point {
            background-color: #4FA987;
            color: #fff;
            height: 100%;
            text-align: center;
            font-weight: 700
        }
        

        .keluar {
            background-color: transparent;
            border: 2px solid black;
            color: #000000;
            padding: 6px 10px;
            /* Mengatur jarak teks dari tepi tombol yang lebih kecil */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: 'Poppins';
            font-size: 12px;
            /* Mengatur ukuran teks yang lebih kecil */
            cursor: pointer;
            height: 36px;
        }

        .keluar:hover {
            background-color: #86878D;
            color: #fff;
        }
 /* Gaya tambahan untuk tabel */
 table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #4FA987; /* Warna hijau untuk border */

        }

        th, td {

            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4FA987;
            color: white;
        }


    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1 style="text-decoration: underline">Pengumpulan Tugas</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="row">

                                <table style="border: 2px">
                                    <thead style="background-color: #4FA987;">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Materi</th>
                                            <th scope="col" style="text-align: center
                                            ;">
                                                Bukti</th>
                                            <th scope="col" style="text-align: center">Point</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Yasin</td>
                                            <td>Bahasa Arab</td>
                                            <td><button  type="submit" class="btn btn-light btn-md keluar col-12">File</button></td>
                                            <td><button style="margin-right:-10px;" type="submit" class="btn btn-light btn-md point col-12"><i
                                                        class="fa-solid fa-check" style="font-size: 20px;"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
