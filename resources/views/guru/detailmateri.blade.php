@extends('layouts.layoutGuru')
{{-- @section('content')

<div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
        <!-- Your sidebar content goes here -->
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
        <!-- Card with an image on left -->
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card with image on left</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div><!-- End Card with an image on left -->
 <!-- Black line and title for Materi section -->
        <hr style="border-top: 2px solid #000;">
        <h2 class="mb-3">Materi</h2>

        <!-- Card for displaying PDF -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">PDF Document</h5>
                <!-- Add your PDF viewer or embed code here -->
                <embed src="your-pdf-file.pdf" type="application/pdf" width="10%" height="10px" />
            </div>
        </div><!-- End Card for displaying PDF -->

        <!-- Line underneath the description card -->
        <hr>

    </div><!-- End Main Content -->
</div><!-- End Row --> --}}

@section('content')

  <main id="main" class="main">
      <!-- End Page Title -->
        <section class="section dashboard">
            <button type="button" class="btn btn-outline-success btn-tarik-saldo" data-bs-toggle="modal" data-bs-target="#modalDetailMateri" style="border-radius: 10px"><i class="fas fa-plus"></i></button>
            <div class="row">
                <div class="col-md-12 col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <!-- Left side columns -->
                            <div class="col-lg-12">
                                <div class="row">
                                    <table>
                                        <thead style="background-color: #4FA987;  " >
                                            <tr>
                                                <th scope="col" style="text-align: center; border-top-left-radius:10px;">Materi</th>
                                                <th scope="col" style="text-align: center;">Keterangan</th>
                                                <th scope="col" style="text-align: center; border-top-right-radius:10px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($detailmateri as $dm)
                                            <tr>
                                                <td style="text-align: center;">{{ $dm->materi->nama_materi }}</td>
                                                <td style="text-align: center; max-width: 300px; overflow: auto;">{{ $dm->keterangan }}</td>
                                                <td style="text-align: center;">
                                                    <div class="d-flex justify-content-center">
                                                        <button style="margin-right: 10px;" class="btn btn-outline-warning edit-button"
                                                            data-bs-toggle="modal" data-bs-target="#modalEditDetailMateri-{{ $dm->id }}"><i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <form action="{{ route('detailmateri.destroy', $dm->id) }}" method="POST" id="delete-form-{{ $dm->id }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="button" class="btn btn-outline-danger delete-btn" id="delete-button" onclick="confirmDelete('{{ $dm->id }}')">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                                <!-- Modal Edit -->
                                                <form action="{{ route('update-detailMateri', $dm->id) }}" method="POST">
                                                    {{-- @dd($dm) --}}
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="modal fade" id="modalEditDetailMateri-{{ $dm->id }}" tabindex="-1" aria-labelledby="modalEditDetailMateriLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalTarikSaldoLabel">Edit Detail</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="materi_id" class="form-label fw-bold">Nama Materi</label>
                                                                        <select name="materi_id" id="selectMetode" class="form-select">
                                                                            <option value="" class="dropdown-menu" disabled selected>Pilih Materi</option>
                                                                            @foreach ($materi as $mtr)
                                                                                <option value="{{ $mtr->id }}" {{ ($mtr->id == $dm->materi_id) ? 'selected' : '' }}> {{ $mtr->nama_materi }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                                                                        <textarea type="text" name="keterangan" id="keterangan" class="form-control">{{ $dm->keterangan }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endforeach
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
    </section>

    <!-- Modal Tambah -->
    <form action="{{ route('detailmateri.store') }}" method="POST">
        @csrf
        <div class="modal fade" id="modalDetailMateri" tabindex="-1" aria-labelledby="modalDetailMateriLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTarikSaldoLabel">Tambah Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kelas" class="form-label fw-bold">Nama Materi</label>
                            <select name="materi_id" id="selectMetode" class="form-select">
                                <option value="" class="dropdown-menu" disabled selected>Pilih Materi</option>
                                @foreach($materi as $mtr)
                                    <option value="{{ $mtr->id }}">{{ $mtr->nama_materi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label fw-bold">Keterangan</label>
                            <textarea type="text" name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan') }}"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function confirmDelete(detailmateriId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form when confirmed
                    document.getElementById('delete-form-'+detailmateriId).submit();
                }
            });
        }
    </script>
</main><!-- End #main -->
@endsection
