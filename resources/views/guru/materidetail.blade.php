@extends('layouts.layoutGuru')

@section('content')
    <style>
        .oval-box {
            background-color: #1c865d;
            width: max-content;
            float: right;
            border-radius: 15px;
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
            height: 40px;
            /* Sesuaikan tinggi hijau di atas card */
            background-color: #1c865d;
            /* Warna hijau */
            border-radius: 10px;
        }

        .custom-img {
            width: 334px;
            height: 251px;
            object-fit: cover;
            margin-top: 90px;
            margin-left: -34px;
        }

        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: rgba(255, 255, 255, 0.03);
            border-top: 1px solid rgba(0, 0, 0, .125);
        }
    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2><strong>{{$materi->mapel}} </strong><span class="text-danger"></span></h2>
                        <ol></ol>
                    </div>
                </div>
            </section>
            <!-- Portfolio Details Section -->
            <section id="portfolio-details" class="portfolio-details">
                <div class="container">
                    <div class="row">
                        <div class="portfolio-details-slider swiper col-md-6 col-12">
                            <div style="width: 100%; height: 100%">
                                <img style="width: 90%; height: 90%" class="mt-4 me-2" src="{{ asset('storage/default/' . $materi->cover) }}" alt="foto default materi">
                            </div>
                        </div>
                        <div class="card col-md-6 col-12" style="border: 1px solid #000; height: 400px;">
                            <!-- Sesuaikan tinggi card -->
                            <div class="green-bg" style="height: 60px; padding: 8px;">
                                <h4 class="card-title"
                                    style="color: rgb(255, 255, 255); margin-top: -8px; margin-left: 15px;">Deskripsi
                                </h4>
                            </div>
                            <div class="card-body" style="height: 100%; display:flex; flex-direction: column; justify-content: space-between">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        {{ $materi->deskripsi_materi }}
                                    </li>
                                </ul>
                                <div class="" style="width: 100%; display: flex; justify-content: end;">
                                    <div class="oval-box" style="width: max-content; padding: 10px;">
                                        <p style="padding: 0px; margin: 0px" class="fw-bold text-white"> RP. {{ number_format($materi->harga, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="oval-box" style="width: auto;">
                                <div class="card-body">
                                    <h5>Rp.{{ $materi->harga }}</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- Modal Edit -->
                                <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('materi.update', $materi) }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel"><strong>Edit Materi </strong></h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 class="modal-title" id="exampleModalLabel">Edit Materi</h6>
                                                    <label for="inputText" class="col-sm-4 col-form-label">Mata
                                                        Pelajaran</label>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <select class="form-select form-select-sm mb-2" name="mapel"
                                                                aria-label="Large select example" id="update_mapel" width="200px"
                                                                value="{{ old('mapel') }}">
                                                                <option selected>{{ $materi->mapel }}</option>
                                                                <option value="Matematika">Matematika</option>
                                                                <option value="IPA">IPA</option>
                                                                <option value="IPS">IPS</option>
                                                                <option value="Bahasa Indonesia">Bahasa Indonesia
                                                                </option>
                                                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label for="inputText" class="col-sm-6 col-form-label">Nama
                                                        Materi</label>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-12">
                                                            <input type="text" name="nama_materi" class="form-control"
                                                                id="update_nama_materi" width="200px"
                                                                value="{{ old('nama_materi', $materi->nama_materi) }}">
                                                        </div>
                                                    </div>
                                                    <label for="inputText" class="col-sm-2 col-form-label">Kelas</label>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <select class="form-select form-select-sm mb-1" name="kelas"
                                                                aria-label="Large select example" id="update_kelas" width="200px"
                                                                value="{{ old('kelas', $materi->kelas) }}">
                                                                <option selected>{{ $materi->kelas }}</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label for="inputText" class="col-sm-6 col-form-label">Harga</label>
                                                    <div class="row">
                                                        <div class="col-sm-12" width="200px">
                                                            <input type="number" name="harga" class="form-control"
                                                                id="update_harga" width="200px"
                                                                value="{{ old('harga', $materi->harga) }}">
                                                        </div>
                                                    </div>
                                                    <label for="inputText" class="col-sm-6 col-form-label">Deskripsi Materi</label>
                                                    <div class="row">
                                                        <div class="col-sm-12" width="200px"
                                                            value="{{ old('deskripsi_materi', $materi->deskripsi_materi) }}">
                                                            <textarea type="text" name="deskripsi_materi" class="form-control" id="update_deskripsi_materi" width="200px"
                                                                value="{{ old('deskripsi_materi', $materi->deskripsi_materi) }}">{{ $materi->deskripsi_materi }}</textarea>
                                                        </div>
                                                    </div>
                                                    {{-- <label for="inputText" class="col-sm-6 col-form-label">Keterangan
                                                        Benefits</label>
                                                    <div class="row mb-1">
                                                        <div class="col-sm-12">
                                                            <textarea type="text" name="keterangan_benefit" class="form-control" id="update_keterangan_benefit" width="200px"
                                                                value="{{ old('keterangan_benefit', $mtr->keterangan_benefit) }}">{{ $mtr->keterangan_benefit }}</textarea>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <label for="inputText" class="col-sm-6 col-form-label">Tanggal
                                                            Tugas</label>
                                                        <div class="row mb-1">
                                                            <div class="col-sm-12">
                                                                <input type="date" name="tanggal_tugas" class="form-control"
                                                                    id="update_tanggal_tugas" width="200px"
                                                                    value="{{ old('tanggal_tugas', $mtr->tanggal_tugas) }}">
                                                            </div>
                                                        </div> --}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <hr style="border-top: 3px solid #000000;">

                        <!-- Navigation Tabs -->

                                            {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link text-left btn" id="profile-tab" data-toggle="tab" data-target="#tab2"
                                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"
                                style="font-size: 18px;">Tugas</button>
                        </li> --}}
                        <div class="tab-content">
                            <!-- Ulasan Tab -->
                            {{-- <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab"> --}}
                            <div class="text-center">
                                <h2 class="mb-4">Tugas</h2>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <table>
                                                    <thead id="example1">
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">No</th>
                                                            <th scope="col" style="text-align: center;">Tugas
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Deskripsi
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Materi
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Tanggal
                                                                Mulai</th>
                                                            <th scope="col" style="text-align: center;">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">Mark nct</td>
                                                            <td style="text-align: center;">Bank</td>
                                                            <td style="text-align: center;">Mandiri</td>
                                                            <td><button type="submit" class="btn btn-secondary btn-md keluar col-12 mt-2">File</button>
                                                            <td style="text-align: center;">Mandiri</td>
                                                            <td>
                                                                <button type="submit"
                                                                    class="btn btn-light btn-sm point"><i
                                                                        class="fas fa-pencil-alt"
                                                                        style="font-size: 16px;"></i></button>
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm point"><i
                                                                        class="fas fa-trash-alt"
                                                                        style="font-size: 16px;"></i></button>
                                                            </td>
                                                        </tr>
                                                            <!-- Add more rows as needed -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success" style="float: right;" data-bs-toggle="modal"
                                data-bs-target="#EditModal">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </main><!-- End #main -->
@endsection
