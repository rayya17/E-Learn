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
            border: 2px solid #4FA987;
            /* Warna hijau untuk border */

        }

        th,
        td {

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
                                            <th scope="col">Tugas</th>
                                            <th scope="col" style="text-align: center">Point</th>
                                            <th scope="col"
                                                style="text-align: center
                                            ;">
                                                Bukti</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tugas_dikumpulkan as $item)
                                        <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->user->name }}</td>
                                                <td>{{ $item->materi->nama_materi }}</td>
                                                <td>{{ $item->tugas->tugas}}</td>
                                                <td style="text-align:center">{{ $item->tugas->point }}</td>
                                                <td><button data-toggle="modal"
                                                        data-target="#materiModal{{ $item->id }}" type="submit"
                                                        class="btn btn-light btn-md keluar col-12">File</button>
                                                </td>
                                                    <div class="modal" id="materiModal{{ $item->id }}" tabindex="-1">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Modal title</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <embed
                                                                        src="{{ asset('storage/bukti/' . $item->bukti) }}"
                                                                        width="770" height="600">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center" style="margin-top: 20px;">
                                {!! $tugas_dikumpulkan->links('pagination::bootstrap-4')->with([
                                    'class' => 'pagination',
                                    'style' => 'margin-top: 20px;'
                                ]) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
