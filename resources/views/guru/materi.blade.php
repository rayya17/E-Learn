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
             right: 10px;
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
             padding: 10px;
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

         .delete-button:hover {
             background-color: #c82333;
         }
     </style>
     <div class="container-fluid">
         <div class="row">
             <section class="courses section">
                 <div class="container">
                     <div class="row">
                         @foreach ($materi as $mtr)
                             <div class="col-lg-4 col-md-4 col-4">
                                 <!-- Single Course -->
                                 <div class="container-card row">
                                     {{-- <div class="col-md-4"> --}}
                                     <div class="card">
                                         <div class="bg-image">
                                             <img class="background" src="{{ asset('storage/default/' . $mtr->cover) }}"
                                                 alt="">
                                         </div>
                                         <div class="tengah d-flex align-items-center justify-content-between w-100 px-2">
                                             @foreach ($guru as $gr)
                                                 <div class="profile">
                                                     <img class="rounded-circle bg-dark" width="60" height="60"
                                                         src="{{ asset('storage/profile/' . $gr->foto_profile) }}"
                                                         alt="">
                                                 </div>
                                             @endforeach
                                             <div class="badge-class">
                                                 <span class="badge bg-success">Rp. {{ $mtr->harga }}</span>
                                             </div>
                                         </div>
                                         <div class="text-card p-4">
                                             <h5 class="title">
                                                 <strong> {{ $mtr->nama_materi }} </strong>
                                             </h5>
                                             <div class="desc">
                                                 <p>{{ $mtr->deskripsi }}</p>
                                             </div>
                                         </div>
                                         <form id="delete-form-{{ $mtr->id }}"
                                             action="{{ route('materi.destroy', $mtr->id) }}" method="POST">
                                             @method('DELETE')
                                             @csrf
                                             <button type="button" class="delete-button"
                                                 onclick="confirmDelete('{{ $mtr->id }}')">
                                                 <i class="fa-solid fa-trash"></i>
                                             </button>
                                         </form>
                                     </div>
                                    </div>
                                </div>
                                     {{-- </div> --}}
                         @endforeach
                         <button type="button" class="large-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-plus"></i>
                        </button>
                     </div>
                     {{-- <button type="button" class="edit-button" data-bs-toggle="modal"
                                     data-bs-target="#EditModal">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button> --}}
                     <!-- Modal Edit -->
                     @foreach ($materi as $mtr)
                         <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <form action="{{ route('materi.update', $mtr) }}" method="post"
                                         enctype="multipart/form-data">
                                         @method('PUT')
                                         @csrf
                                         <div class="modal-header">
                                             <h3 class="modal-title" id="exampleModalLabel">Edit Materi dan
                                                 Tugas</h3>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                 aria-label="Close"></button>
                                         </div>
                                         <div class="modal-body">
                                             <h6 class="modal-title" id="exampleModalLabel">Tambah Materi</h6>
                                             <label for="inputText" class="col-sm-4 col-form-label">Mata
                                                 Pelajaran</label>
                                             <div class="row">
                                                 <div class="col-sm-12">
                                                     <select class="form-select form-select-sm mb-2" name="mapel"
                                                         aria-label="Large select example" id="update_mapel" width="200px"
                                                         value="{{ old('mapel') }}">
                                                         <option selected>{{ $mtr->mapel }}</option>
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
                                                         value="{{ old('nama_materi', $mtr->nama_materi) }}">
                                                 </div>
                                             </div>
                                             <label for="inputText" class="col-sm-12 col-form-label">File
                                                 Materi</label>
                                             <div class="row">
                                                 <div class="col-sm-12">
                                                     <input type="file" name="file_materi" class="form-control"
                                                         id="update_file_materi" width="200px"
                                                         value="{{ old('file_materi', $mtr->file_materi) }}">
                                                 </div>
                                             </div>
                                             <label for="inputText" class="col-sm-2 col-form-label">Kelas</label>
                                             <div class="row">
                                                 <div class="col-sm-12">
                                                     <select class="form-select form-select-sm mb-1" name="kelas"
                                                         aria-label="Large select example" id="update_kelas" width="200px"
                                                         value="{{ old('kelas', $mtr->kelas) }}">
                                                         <option selected>{{ $mtr->kelas }}</option>
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
                                                         value="{{ old('harga', $mtr->harga) }}">
                                                 </div>
                                             </div>
                                             <label for="inputText" class="col-sm-6 col-form-label">Deskripsi</label>
                                             <div class="row">
                                                 <div class="col-sm-12" width="200px"
                                                     value="{{ old('deskripsi', $mtr->deskripsi) }}">
                                                     <textarea type="text" name="deskripsi" class="form-control" id="update_deskripsi" width="200px"
                                                         value="{{ old('deskripsi', $mtr->deskripsi) }}">{{ $mtr->deskripsi }}</textarea>
                                                 </div>
                                             </div>
                                             <br>
                                             <h6 class="modal-title" id="exampleModalLabel">Tambah Tugas</h6>
                                             <label for="inputText" class="col-sm-6 col-form-label">Nama
                                                 Tugas</label>
                                             <div class="row mb-1">
                                                 <div class="col-sm-12">
                                                     <input type="text" name="tugas" class="form-control"
                                                         id="update_tugas" width="200px"
                                                         value="{{ old('tugas', $mtr->tugas) }}">
                                                 </div>
                                             </div>
                                             <label for="inputText" class="col-sm-6 col-form-label">Detail
                                                 Tugas</label>
                                             <div class="row mb-1">
                                                 <div class="col-sm-12">
                                                     <textarea type="text" name="detail_tugas" class="form-control" id="update_detail_tugas" width="200px"
                                                         value="{{ old('detail_tugas', $mtr->detail_tugas) }}">{{ $mtr->detail_tugas }}</textarea>
                                                 </div>
                                             </div>
                                             <label for="inputText" class="col-sm-6 col-form-label">Tanggal
                                                 Tugas</label>
                                             <div class="row mb-1">
                                                 <div class="col-sm-12">
                                                     <input type="date" name="tanggal_tugas" class="form-control"
                                                         id="update_tanggal_tugas" width="200px"
                                                         value="{{ old('tanggal_tugas', $mtr->tanggal_tugas) }}">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                 data-bs-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Save
                                                 changes</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                        @endforeach
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
                     <h3 class="modal-title" id="exampleModalLabel">Tambah Materi dan Tugas</h3>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <h6 class="modal-title" id="exampleModalLabel">Tambah Materi</h6>
                     <form action="{{ route('materi.store') }}" method="post" enctype="multipart/form-data">
                         @csrf
                         <label for="inputText" class="col-sm-4 col-form-label">Mata Pelajaran</label>
                         <div class="row">
                             <div class="col-sm-12">
                                 <select class="form-select form-select-sm mb-2" name="mapel"
                                     aria-label="Large select example" id="mapel" width="200px" value="{{old('mapel')}}">
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
                                 <input type="text" name="nama_materi" class="form-control" id="nama_materi"
                                     width="200px" value="{{old('nama_materi')}}">
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-12 col-form-label">File Materi</label>
                         <div class="row">
                             <div class="col-sm-12">
                                 <input type="file" name="file_materi" class="form-control" id="file_materi"
                                     width="200px" value="{{old('file_materi')}}">
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-2 col-form-label">Kelas</label>
                         <div class="row">
                             <div class="col-sm-12">
                                 <select class="form-select form-select-sm mb-1" name="kelas"
                                     aria-label="Large select example" id="kelas" width="200px" value="{{old('kelas')}}">
                                     <option selected>Pilih Kelas</option>
                                     <option value="10">10</option>
                                     <option value="11">11</option>
                                     <option value="12">12</option>
                                 </select>
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-6 col-form-label">Harga</label>
                         <div class="row">
                             <div class="col-sm-12" width="200px">
                                 <input type="number" name="harga" class="form-control" id="harga"
                                     width="200px" value="{{old('harga')}}">
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-6 col-form-label">Deskripsi</label>
                         <div class="row">
                             <div class="col-sm-12" width="200px">
                                 <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" width="200px" value="{{old('deskripsi')}}"></textarea>
                             </div>
                         </div>
                         <br>
                         <h6 class="modal-title" id="exampleModalLabel">Tambah Tugas</h6>
                         <label for="inputText" class="col-sm-6 col-form-label">Nama Tugas</label>
                         <div class="row mb-1">
                             <div class="col-sm-12">
                                 <input type="text" name="tugas" class="form-control" id="tugas"
                                     width="200px" value="{{old('tugas')}}">
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-6 col-form-label">Detail Tugas</label>
                         <div class="row mb-1">
                             <div class="col-sm-12">
                                 <textarea type="text" name="detail_tugas" class="form-control" id="detail_tugas" width="200px" value="{{old('detail_tugas')}}"></textarea>
                             </div>
                         </div>
                         <label for="inputText" class="col-sm-6 col-form-label">Tanggal Tugas</label>
                         <div class="row mb-1">
                             <div class="col-sm-12">
                                 <input type="date" name="tanggal_tugas" class="form-control" id="tanggal_tugas"
                                     width="200px" value="{{old('tanggal_tugas')}}">
                             </div>
                         </div>
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
