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
        margin-bottom: 0px;
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
        background-color: #4FA987;
        color: white;
    }

    .form-control {
        padding: 10px;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(function (dropdown) {
            new bootstrap.Dropdown(dropdown);
        });
    });
</script>

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
            <form action="{{ route('pengumpulan',['tugas_id' => $detailTugas, 'guru' => $materi->guru->id, 'materi_id' => $materi->id]) }}" id="assignmentForm" method="post" enctype="multipart/form-data" style="display: none;">
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
        <form action="{{ route('komentar.create',['materi_id' => $materi,'tugas_id' => $detailTugas]) }}" method="post">
            @csrf
            <label for="comment">Komentar:</label>
            <div class="d-flex gap-2">
                <input type="text" placeholder="Masukkan komentar" name="komentar" class="form-control">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </form>
    </div>


    <!-- Tampilan Komentar Card -->
    <div id="itemKomentar">
        @foreach ($komentar as $km)
            <div class="card mb-4 comment-{{ $km->id }}">
                <div class="chat px-4 pt-3 d-flex justify-content-between">
                    <div class="left d-flex">
                        <div class="profile me-3">
                            <div class="photo rounded-circle" style="margin-right: 10px">
                                @if ($km->user->profile)
                                    <img src="{{ asset('storage/' . $km->user->profile) }}"
                                        alt="Profile Image" width="45px" height="45px" style="border-radius:50%;">
                                @else
                                    <img src="{{ asset('storage/default/defaultprofile.jpeg') }}"
                                        alt="Default Profile Image"  width="45px" height="45px" style="border-radius:50%;">
                                @endif
                            </div>
                        </div>
                        <div class="chat-column">
                            <div class="username">
                                <h5><strong>{{ $km->user->name }}</strong></h5>
                            </div>
                            <div class="text-chat">
                                <p>{{ $km->komentar }}</p>
                            </div>
                            <div class="tanggal-chat">
                                <p>{{ date('d F Y', strtotime($km->tanggal)) }}</p>
                            </div>
                            <button onclick="reply({{ $km->id }})"  class="btn btn-light-warning font-medium text-warning px-4 rounded-pill"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{ $km->id }}" aria-expanded="true"
                                aria-controls="collapseExample{{ $km->id }}">
                                Lihat Komentar
                            </button>
                            <div class="collapse" id="{{ $km->id }}" style="width:900px; margin-top: 5px;;">
                                <div class="card card-body lebarcart" style="">
                                    {{-- Foreach Komentar --}}

                                    <form id="addKomentar" action="{{ route('reply.komen', $km->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" id="tugas_id" name="tugas_id">
                                        <div class="card mb-3 p-2">
                                            <div class="form-floating d-flex">
                                                <input type="text" name="komentar" id="komentar"
                                                    class="form-control me-3" id="floatingInput" placeholder="Komentar">
                                                <label for="floatingInput">Balasan Komentar</label>
                                                <button type="submit" name="submit"
                                                    class="btn btn-success"><i class="bi bi-send-fill"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- @dd($komentar) --}}
                                    @foreach ($komentar->where('parent_id',$km->id) as $item)
                                        <div class="card mb-4 comment-{{ $item->id }}" >
                                            <div class="chat px-4 pt-3 d-flex justify-content-between">
                                                <div class="left d-flex">
                                                    <div class="profile me-3">
                                                        <div class="photo rounded-circle"
                                                            style="margin-right: 10px">
                                                            @if ($item->user->profile)
                                                                <img src="{{ asset('storage/' . $item->user->profile) }}"
                                                                    alt="Profile Image" width="45px" height="45px" style="border-radius:50%;">
                                                            @else
                                                                <img src="{{ asset('storage/default/defaultprofile.jpeg') }}"
                                                                    alt="Default Profile Image" width="45px" height="45px" style="border-radius:50%;">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="chat-column">
                                                        <div class="username">
                                                            <h5><strong>{{ $item->user->name }}</strong></h5>
                                                        </div>
                                                        <div class="text-chat">
                                                            <p>{{ $item->komentar }}</p>
                                                        </div>
                                                        <div class="tanggal-chat">
                                                            <p>{{ date('d F Y', strtotime($item->tanggal)) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="action">
                            @if (auth()->check() && $km->user_id == auth()->user()->id)
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                        <li>
                                            <form action="{{ route('komentar.delete', $km->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="delete-comment-btn dropdown-item">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
        <div>
            {{-- {{ $Komentar->links('pagination::bootstrap-5') }} --}}
        </div>
    </div>

</div>
<script>
    function reply(id) {
        let btn = false;

        if (!btn) {
            const reply = document.getElementById(id);
            reply.classList.toggle('show');
            btn = !btn
        }
    }



    // Call the function with the film's title when the page loads

</script>

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
