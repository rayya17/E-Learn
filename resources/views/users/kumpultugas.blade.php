@extends('layouts.sidebar')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #efeeee !important;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 20px;
        padding: 20px;
    }

    h2 {
        text-align: center;
    }

    form {
        margin-bottom: 20px;
    }

    label,
    textarea,
    input,
    button {
        margin-bottom: 10px;
        display: block;
    }

    .comments {
        border-top: 1px solid #ccc;
        padding-top: 10px;
    }

    .comment {
        margin-bottom: 10px;
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 8px;
    }

    .view-material-btn {
        display: block;
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .baten-materi {
        background-color: rgb(69, 177, 69);
        color: white;
    }
    .form-control{
     padding: 10px;
    }

</style>

@section('content')
    <div class="container">

        <!-- Materi Card -->
        <div class="card" style="display: grid; grid-template-columns: 1fr auto;">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $detailTugas->tugas }}</h2>
                </div>
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <p>{{ $materi->deskripsi }}</p>

                        <button data-bs-toggle="modal" data-bs-target="#materi" class="btn btn-success" type="submit">Lihat Materi</button>
                        <div class="modal" id="materi" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                        <embed src="{{ asset('storage/pdf/'.$detailTugas->file_tugas)}}" width="770" height="600">

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                </div>
            </div>
        </div>
        <!-- Pengumpulan Tugas Card -->
        <div class="card">
            <h2>Pengumpulan Tugas</h2>
            <div class="task">
                <div class="d-flex">
                    <button class="task-btn" onclick="toggleTask(this)" style="border: none; background: none;font-size: 30px;  ">+</button>
                    <div class="description ms-2">
                        <div><h4 style="margin-top: 13px">{{ $detailTugas->tugas }}</h4></div>
                    </div>
                </div>

                {{-- Form Pengumpulan Tugas --}}
                <form action="{{ route('pengumpulan') }}" method="post" enctype="multipart/form-data" style="display: none;">
                    @csrf
                    <div class="card" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1)">
                        <br>
                        <label for="assignment">Deskripsi tugas:</label>
                        <p>{{ $detailTugas->detail_tugas }}</p>
                        <div class="d-flex">
                            <input class="form-control col-6" type="file" name="bukti" id="assignment" accept=".pdf, .doc, .docx">
                            <button type="submit" class="btn btn-success">Kumpulkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Form Komentar Card -->
        <div class="card">
            <form action="#" method="post">
                <label for="comment">Komentar:</label>
                <div class="d-flex gap-2">
                    <input type="text" placeholder="Masukkan komentar" class="form-control">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>


        <!-- Tampilan Komentar Card -->
        <div class="card">
            <div class="comments">
                <h3>Komentar:</h3>
                <div class="comment">
                    <p>Ini adalah contoh komentar 1.</p>
                </div>

                <!-- Tambahkan div.comment sesuai jumlah komentar -->
            </div>
        </div>

    </div>

    <script>
        function toggleTask(button) {
            var description = button.nextElementSibling.querySelector('.description');
            var form = document.getElementById('assignmentForm');
            var buttonText = button.innerText.trim();

            if (buttonText === '+') {
                button.innerText = '-';
                form.style.display = 'block';
            } else {
                button.innerText = '+';
                form.style.display = 'none';
            }
        }

        function navigateToMaterialPage() {
            // Add code to navigate to the material page
            alert('Navigating to Material Page');
            // Replace the alert with your actual navigation code
        }
    </script>
@endsection
