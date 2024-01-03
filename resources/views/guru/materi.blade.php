 @extends('layouts.layoutGuru')
 @section('content')
     <style>
         .main-content {
             position: absolute;
             top: 42px;
             left: 268px;
             width: 84vw;
         }

         .icon-plus-container {
             position: fixed;
             bottom: 20px;
             right: 20px;
         }

         .icon-plus {
             display: flex;
             align-items: center;
             justify-content: center;
             background-color: #007bff;
             color: #fff;
             border-radius: 50%;
             width: 50px;
             height: 50px;
             text-decoration: none;
             font-size: 50px;
             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
             transition: background-color 0.3s ease;
         }

         .icon-plus:hover {
             background-color: #0056b3;
         }

         /* Tombol besar dengan ikon plus */
         .large-button {
             position: fixed;
             bottom: 30px;
             right: 25px;
             width: 70px;
             height: 70px;
             background-color: #4FA987;
             color: #fff;
             font-size: 40px;
             border: none;
             border-radius: 100px;
             cursor: pointer;
             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
             transition: background-color 0.3s ease;
             padding: 5px;
         }

         .large-button:hover {
             background-color: darkgreen;
         }

         /* Gaya baru untuk tombol hapus */
         .delete-button {
             position: absolute;
             bottom: 0;
             right: 0;
             margin: 10px;
             background-color: #dc3545;
             color: #fff;
             border: none;
             padding: 5px 25px;
             border-radius: 5px;
             cursor: pointer;
             transition: background-color 0.3s ease;
             margin-right: 25px
         }

         .edit-button {
             position: absolute;
             bottom: 0;
             right: 20;
             margin: 10px;
             background-color: #9f35dc;
             color: #fff;
             border: none;
             padding: 5px 25px;
             border-radius: 5px;
             cursor: pointer;
             transition: background-color 0.3s ease;
             margin-right: 25px
         }

         .delete-button:hover {
             background-color: #c82333;
         }

         .container-card .card .tengah {
            position: absolute;
            top: 180px;
            display: flex;
        }

        .container-card .card .tengah .profile {
            overflow: hidden;
            position: absolute;
            left: 14px;
            top: 21px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            border-radius: 100%;
        }

        .container-card .card .tengah .profile .rounded-circle {
            object-fit: cover;
            width: 60px;
            height: 60px;
        }
     </style>
     <div class="container-fluid">
         <div class="row">
             <section class="courses section">
                 <div class="container">
                     <div class="row">
                         @foreach ($materi as $mtr)
                             <div class="col-lg-4 col-md-4 col-4 mb-4">
                                 <!-- Single Course -->
                                 <div class="container-card row">
                                     {{-- <div class="col-md-4"> --}}
                                     <div class="card">
                                         <div class="button-eye mt-3">
                                             <!-- Button with Eye Icon (Align to the left) -->
                                             <button type="button"
                                                 onclick="window.location='{{ route('materidetail', $mtr->id) }}'"
                                                 class="btn btn-primary"><i class="fas fa-eye"></i>
                                             </button>
                                         </div>
                                         <div class="bg-image">
                                             <img class="background" src="{{ asset('storage/default/' . $mtr->cover) }}"
                                                 alt="">
                                         </div>
                                         <div class="tengah d-flex align-items-center justify-content-between w-100 px-2">
                                             <div class="profile">
                                                 <img class="rounded-circle bg-dark" width="60" height="60" src="{{ asset('storage/profile/' . $mtr->guru->user->foto_user) }}" alt="">
                                             </div>
                                             <div class="badge-class">
                                                 <span class="badge bg-success">Rp.
                                                     {{ number_format($mtr->harga, 0, ',', '.') }}</span>
                                             </div>
                                         </div>
                                         <div class="text-card p-4">
                                             <h5 class="title">
                                                 <strong> {{ $mtr->nama_materi }} </strong>
                                             </h5>
                                             <div class="d-inline-block text-truncate" style="max-width: 200px">
                                                 <p>{{ $mtr->deskripsi_materi }}</p>
                                             </div>
                                         </div>

                                         <div class="button mb-3" style="display: flex; justify-content: space-between">
                                             <button type="button" data-bs-toggle="modal" data-bs-target="#tambahTugas"
                                                 class="btn btn-success">Tambah tugas <i class="fas fa-plus"></i></button>
                                             <form id="delete-form-{{ $mtr->id }}"
                                                 action="{{ route('materi.destroy', $mtr->id) }}" method="POST">
                                                 @method('DELETE')
                                                 @csrf
                                                 <button type="button" class="btn btn-danger"
                                                     onclick="confirmDelete('{{ $mtr->id }}')">
                                                     <i class="fa-solid fa-trash"></i>
                                                 </button>
                                             </form>
                                         </div>
                                         <div class="d-flex justify-content-between align-items-center" >
                                             <div class="modal fade" id="tambahTugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                 <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <h5 class="modal-title" id="exampleModalLabel">Tambah Tugas</h5>
                                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                             <form action="{{ route('tugas', $mtr->id) }}" method="POST" enctype="multipart/form-data">
                                                                 @csrf
                                                                 <label for="inputText" class="col-sm-12 col-form-label">File Materi <span
                                                                         style="font-size: 12px; color: #b9b7b7;">(File berupa PDF)</span></label>
                                                                 <div class="row">
                                                                     <div class="col-sm-12">
                                                                         <input type="file" name="file_tugas"
                                                                             class="form-control @error('file_tugas') is-invalid @enderror"
                                                                             id="file_tugas" width="200px"
                                                                             value="{{ old('file_tugas') }}">
                                                                     </div>
                                                                     @error('file_tugas')
                                                                         <div class="invalid-feedback">{{ $message }}
                                                                         </div>
                                                                     @enderror
                                                                 </div>

                                                                 <input type="hidden" value="$mtr->guru_id" name="guru_id">
                                                                 <label for="inputText" class="col-sm-6 col-form-label">Nama Tugas</label>
                                                                 <div class="row mb-1">
                                                                     <div class="col-sm-12">
                                                                         <input type="text" name="tugas"
                                                                             class="form-control @error('tugas') is-invalid @enderror"
                                                                             id="tugas" width="200px"
                                                                             value="{{ old('tugas') }}">
                                                                         @error('tugas')
                                                                             <div class="invalid-feedback">
                                                                                 {{ $message }}</div>
                                                                         @enderror
                                                                     </div>
                                                                 </div>
                                                                 <label for="inputText"
                                                                     class="col-sm-6 col-form-label">Detail
                                                                     Tugas</label>
                                                                 <div class="row mb-1">
                                                                     <div class="col-sm-12">
                                                                         <textarea type="text" name="detail_tugas" class="form-control @error('detail_tugas') is-invalid @enderror"
                                                                             id="detail_tugas" width="200px" value="{{ old('detail_tugas') }}"></textarea>
                                                                         @error('detail_tugas')
                                                                             <div class="invalid-feedback">
                                                                                 {{ $message }}</div>
                                                                         @enderror
                                                                     </div>
                                                                 </div>
                                                                 <label for="tingkatKesulitan"
                                                                     class="col-sm-6 col-form-label">Tingkat Kesulitan</label>
                                                                 <div class="row mb-1">
                                                                     <div class="col-sm-12">
                                                                         <select name="tingkat_kesulitan" id="tingkatKesulitan"
                                                                             class="form-select @error('tingkat_kesulitan') is-invalid @enderror" >
                                                                             <option value="rendah"
                                                                                 {{ old('tingkat_kesulitan') === 'rendah' ? 'selected' : '' }}> Rendah</option>
                                                                             <option value="sedang"
                                                                                 {{ old('tingkat_kesulitan') === 'sedang' ? 'selected' : '' }}> Sedang</option>
                                                                             <option value="tinggi"
                                                                                 {{ old('tingkat_kesulitan') === 'tinggi' ? 'selected' : '' }}> Tinggi</option>
                                                                         </select>
                                                                         @error('tingkat_kesulitan')
                                                                             <div class="invalid-feedback">{{ $message }}
                                                                             </div>
                                                                         @enderror
                                                                     </div>
                                                                 </div>
                                                         </div>
                                                         <div class="modal-footer">
                                                             <button type="button" class="btn btn-secondary"
                                                                 data-bs-dismiss="modal">Close</button>
                                                             <button type="submit" class="btn btn-primary">Save
                                                                 changes</button>
                                                         </div>
                                                     </div>
                                                     </form>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                     <button type="button" class="large-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         <i class="fas fa-plus"></i>
                     </button>
                 </div>
                 {{-- <button type="button" class="edit-button" data-bs-toggle="modal"
                                     data-bs-target="#EditModal">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button> --}}
         </div>
         <!--/ End Single Course -->
         </section>
     </div>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="exampleModalLabel"><strong>Tambah Materi</strong></h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <h6 class="modal-title" id="exampleModalLabel">Tambah Materi</h6>
                     <form action="{{ route('materi.store') }}" method="post" enctype="multipart/form-data">
                         @csrf
                         <label for="inputText" class="col-sm-4 col-form-label">Mata Pelajaran</label>
                         <div class="row">
                             <div class="col-sm-12">
                                 <select class="form-select form-select-sm mb-2 @error('mapel') is-invalid @enderror"
                                     name="mapel" aria-label="Large select example" id="mapel" width="200px"
                                     value="{{ old('mapel') }}">
                                     <option selected>Pilih Mata Pelajaran</option>
                                     <option value="Matematika">Matematika</option>
                                     <option value="IPA">IPA</option>
                                     <option value="IPS">IPS</option>
                                     <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                     <option value="Bahasa Inggris">Bahasa Inggris</option>
                                 </select>
                                 @error('mapel')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-6 col-form-label">Nama Materi</label>
                         <div class="row mb-2">
                             <div class="col-sm-12">
                                 <input type="text" name="nama_materi"
                                     class="form-control @error('nama_materi') is-invalid @enderror" id="nama_materi"
                                     width="200px" value="{{ old('nama_materi') }}">
                             </div>
                             @error('nama_materi')
                                 <div class="invalid-feedback">{{ $message }}</div>
                             @enderror
                         </div>
                         <label for="inputText" class="col-sm-2 col-form-label">Kelas</label>
                         <div class="row">
                             <div class="col-sm-12">
                                 <select class="form-select form-select-sm mb-1  @error('kelas') is-invalid @enderror"
                                     name="kelas" aria-label="Large select example" id="kelas" width="200px"
                                     value="{{ old('kelas') }}">
                                     <option selected>Pilih Kelas</option>
                                     <option value="10">10</option>
                                     <option value="11">11</option>
                                     <option value="12">12</option>
                                 </select>
                                 @error('kelas')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-6 col-form-label">Harga</label>
                         <div class="row">
                             <div class="col-sm-12" width="200px">
                                 <input type="number" name="harga"
                                     class="form-control  @error('harga') is-invalid @enderror" id="harga"
                                     width="200px" value="{{ old('harga') }}">
                                 @error('harga')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-6 col-form-label">Deskripsi Materi</label>
                         <div class="row">
                             <div class="col-sm-12" width="200px">
                                 <textarea type="text" name="deskripsi_materi" class="form-control @error('deskripsi_materi') is-invalid @enderror"
                                     id="deskripsi_materi" width="200px" value="{{ old('deskripsi') }}"></textarea>
                             </div>
                             @error('deskripsi')
                                 <div class="invalid-feedback">{{ $message }}</div>
                             @enderror
                         </div>
                         <label for="inputText" class="col-sm-6 col-form-label">Keterangan Benefit</label>
                         <div class="row">
                             <div class="col-sm-12" width="200px">
                                 <textarea type="text" name="keterangan_benefit"
                                     class="form-control @error('keterangan_benefit') is-invalid @enderror" id="keterangan_benefit" width="200px"
                                     value="{{ old('keterangan_benefit') }}"></textarea>
                             </div>
                             @error('keterangan_benefit')
                                 <div class="invalid-feedback">{{ $message }}</div>
                             @enderror
                         </div>
                         {{-- <br> --}}

                         {{-- <label for="inputText" class="col-sm-6 col-form-label">Tanggal Tugas</label>
                         <div class="row mb-1">
                             <div class="col-sm-12">
                                 <input type="date" name="tanggal_materi" class="form-control @error('tanggal_tugas') is-invalid @enderror" id="tanggal_materi"
                                     width="200px" value="{{old('tanggal_materi')}}">
                                @error('tanggal_materi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                             </div>
                         </div> --}}
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Save changes</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>


     <!-- Include SweetAlert -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <!-- Script untuk menampilkan SweetAlert -->
     <script>
         function confirmDelete(materiId) {
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
                     document.getElementById('delete-form-' + materiId).submit();
                 }
             });
         }
     </script>
 @endsection
