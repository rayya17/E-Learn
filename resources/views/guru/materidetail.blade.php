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

        .row {
            margin-right: 2px;
            margin-left: -2px;
        }

        .edit-materi-btn {
            float: right;
            margin-top: 10px;
            font-size: 14px; /* Adjust the font size as needed */
        }

        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: rgba(255, 255, 255, 0.03);
        }

        .custom-img {
            width: 334px;
            height: 251px;
            object-fit: cover;
            margin-top: 90px;
            margin-left: -34px;
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
                                        <p style="padding: 0px; margin: 0px" class="fw-bold text-white"> RP. {{ number_format($materi->harga, 0, ',', '.') }} </p>
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
                        <div class="card-footer">
                            <button type="button" class="btn btn-success edit-materi-btn" data-bs-toggle="modal" data-bs-target="#EditModal">
                                <i class="fas fa-pencil-alt"> </i> Edit Materi
                            </button>
                        </div>
                        {{-- <style>
                            /* Add this style section to your HTML or your CSS file */
                            .btn-edit {
                                 /* Set the width to fit the content */
                                margin-left: 10px; /* Adjust the left margin as needed */
                            }
                        </style> --}}
                        <div class="col-lg-4 col-md-4">
                            <!-- Modal Edit -->
                                <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('materi.update', $materi) }}" method="post" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel"><strong>Edit Materi </strong></h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 class="modal-title" id="exampleModalLabel">Edit Materi</h6>
                                                    <label for="inputText" class="col-sm-4 col-form-label">Mata Pelajaran</label>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <select class="form-select form-select-sm mb-2" name="mapel" aria-label="Large select example" id="update_mapel" width="200px"
                                                                value="{{ old('mapel') }}">
                                                                <option selected>{{ $materi->mapel }}</option>
                                                                <option value="Matematika">Matematika</option>
                                                                <option value="IPA">IPA</option>
                                                                <option value="IPS">IPS</option>
                                                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label for="inputText" class="col-sm-6 col-form-label">Nama Materi</label>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-12">
                                                            <input type="text" name="nama_materi" class="form-control" id="update_nama_materi" width="200px"
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
                                                        <div class="col-sm-12" width="200px" value="{{ old('deskripsi_materi', $materi->deskripsi_materi) }}">
                                                            <textarea type="text" name="deskripsi_materi" class="form-control" id="update_deskripsi_materi" width="200px"
                                                                value="{{ old('deskripsi_materi', $materi->deskripsi_materi) }}">{{ $materi->deskripsi_materi }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary"> Save changes </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <hr style="border-top: 3px solid #000000;">
                        <div class="tab-content">
                            <!-- Ulasan Tab -->
                                <div class="text-center">
                                    <h2 class="mb-4">Tugas</h2>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-lg-16">
                                                <div class="row">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center; background-color:#4FA987; border-top-left-radius:10px; ">No</th>
                                                                <th scope="col" style="text-align: center; background-color:#4FA987;">Tugas</th>
                                                                <th scope="col" style="text-align: center; background-color:#4FA987;">Deskripsi</th>
                                                                <th scope="col" style="text-align: center; background-color:#4FA987;">Materi</th>
                                                                <th scope="col" style="text-align: center; background-color:#4FA987;">Tingkat Kesulitan</th>
                                                                <th scope="col" style="text-align: center; background-color:#4FA987;">Tanggal Mulai</th>
                                                                <th scope="col" style="text-align: center; background-color:#4FA987; border-top-right-radius:10px; ">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                @php
                                                                    $no = 1;
                                                                @endphp
                                                            @foreach ($tugas as $tgs )
                                                                <tr>
                                                                    <td style="text-align: center;">{{ $no++ }}</td>
                                                                    <td style="text-align: center;">{{ $tgs->tugas }}</td>
                                                                    <td style="text-align: center;">{{ $tgs->detail_tugas }}</td>
                                                                    <td style="text-align: center;">
                                                                        <button type="submit" class="btn btn-secondary btn-md keluar col-6 mt-2" >
                                                                            {{ $tgs->file_tugas }}
                                                                        </button>
                                                                    </td>
                                                                    <td style="text-align: center;">{{ $tgs->tingkat_kesulitan }}</td>
                                                                    <td style="text-align: center;">{{ date('d F Y', strtotime($tgs->tanggal_tugas))}}</td>
                                                                    <td>
                                                                        <button type="submit" class="btn btn-light btn-sm point" data-toggle="modal" data-target="#EditModalTugas">
                                                                            <i class="fas fa-pencil-alt" style="font-size: 16px;"></i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-danger btn-sm point" onclick="deleteTugas({{ $tgs->id }})">
                                                                            <i class="fas fa-trash-alt" style="font-size: 16px;"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="col-lg-4 col-md-4">
                                                        <!-- Modal Edit -->
                                                        <div class="modal fade" id="EditModalTugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <form action="{{ route('tugas.update', $tgs->id) }}" method="post" enctype="multipart/form-data">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title" id="exampleModalLabel"><strong>Edit Tugas</strong></h4>
                                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                            <div class="modal-body">
                                                                                <label for="inputText" class="col-sm-4 col-form-label">Tugas</label>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <input type="text" name="tugas" class="form-control @error('tugas') is-invalid @enderror"
                                                                                            id="update_tugas" width="200px" value="{{ old('tugas', $tgs->tugas) }}">
                                                                                        @error('tugas')
                                                                                            <div class="invalid-feedback">
                                                                                                    {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <label for="inputText" class="col-sm-6 col-form-label">Deskripsi</label>
                                                                                <div class="row mb-2">
                                                                                    <div class="col-sm-12" width="200px" value="{{ old('detail_tugas', $tgs->detail_tugas) }}">
                                                                                        <textarea type="text" name="detail_tugas" class="form-control" id="update_detail_tugas" width="200px"
                                                                                            value="{{ old('detail_tugas', $tgs->detail_tugas) }}">{{ $tgs->detail_tugas }}
                                                                                        </textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <label for="inputText" class="col-sm-6 col-form-label">Tingkat Kesulitan</label>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <select name="tingkat_kesulitan" id="update_tingkat_kesulitan" class="form-select @error('tingkat_kesulitan') is-invalid @enderror" value="{{ old('tingkat_kesulitan', $tgs->tingkat_kesulitan) }}">
                                                                                            <option value="rendah"
                                                                                                {{ old('tingkat_kesulitan') === 'rendah' ? 'selected' : '' }}>Rendah</option>
                                                                                            <option value="sedang"
                                                                                                {{ old('tingkat_kesulitan') === 'sedang' ? 'selected' : '' }}>Sedang</option>
                                                                                            <option value="tinggi"
                                                                                                {{ old('tingkat_kesulitan') === 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                                                                                        </select>
                                                                                        @error('tingkat_kesulitan')
                                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <label for="inputText" class="col-sm-12 col-form-label">File Materi <span style="font-size: 12px; color: #b9b7b7;">(File berupa PDF)</span></label>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12" width="200px">
                                                                                        <input type="file" name="file_tugas" class="form-control @error('file_tugas') is-invalid @enderror"
                                                                                        id="update_file_tugas" width="200px" value="{{ old('file_tugas', $tgs->file_tugas) }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                                                                                <button type="submit" class="btn btn-primary"> Save changes </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                 @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"> </script>
    <script >
            function deleteTugas(tugas_id){
                Swal.fire ({
                    title: 'Apa kamu yakin?' ,
                    text: 'Kamu tidak akan bisa mengembalikan data ini!' ,
                    icon: 'Warning',
                    showCancelButton: true ,
                    confirmButtonColor: '#d33' ,
                    cancelButtonColor: '#3085d6' ,
                    confirmButtonText: 'iya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Menggunakan metode DELETE dalam permintaan HTTP
                        fetch(`{{ url("/delete-tugas") }}/${tugas_id}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                        }).then(response => {
                            if (response.ok) {
                                // Redirect atau lakukan sesuatu setelah berhasil menghapus
                                window.location.reload();
                            } else {
                                //Handle kesalahan jika diperlukan
                                console.error('Gagal menghapus tugas');
                            }
                        });
                    }
                });
            }
    </script>

@endsection
