@extends('layouts.layoutUser')

@section('content')
    <style>
        .comment-card {
            display: flex;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }

        /* Foto profil */
        .profile-picture {
            border-radius: 50%;
            margin-right: 15px;
            width: 80px;
            height: 80px;
        }

        /* Informasi komentar (nama dan tanggal) */
        .comment-info {
            flex-grow: 1;
        }

        /* Nama pengguna */
        .username {
            font-weight: bold;
            font-size: 1.2em;
        }

        /* Isi komentar */
        .comment-text {
            font-size: 1.1em;
            margin-top: 8px;
        }

        /* Tanggal komentar */
        .comment-date {
            font-size: 0.9em;
            color: #777777;
            margin-top: 8px;
        }
    </style>
    <ul class="nav justify-content-center nav-tabs" id="myTab" role="tablist"
        style="align-items: center; align-content:center">
        <li class="nav-item" role="presentation" style="align-items: center; align-content:center;">
            <button style="width: 300px" class="nav-link active" id="home-tab" data-toggle="tab" data-target="#mapel"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Detail</button>
        </li>
        <li class="nav-item" role="presentation" style="align-items: center; align-content:center">
            <button style="width: 300px;" class="nav-link" id="profile-tab" data-toggle="tab" data-target="#tab2"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ulasan</button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="mapel" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="semua">
                <h2 style="margin-bottom: 20px; margin-top: 20px;">Detail Materi</h2>
                <div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">

                    <div class="cover">
                        <img style="width: 500px;" src="{{ asset('storage/default/' . $materi->cover) }}">
                    </div>
                    <div class="title" style="margin-bottom: 50px;">
                        <div class="kelas d-flex">
                            <h4 style="margin-right:auto">{{ $materi->mapel }}</h4>
                            <h6>Kelas : {{ $materi->kelas }}</h6>
                        </div>
                        <h1 style="font-size: 80px;"><strong>{{ $materi->nama_materi }}</strong></h1>
                        <div class="content">
                            @foreach ($materi->detailmateri as $item)
                                <p style="font-size: 20px;">{{ $item->keterangan }}</p>
                            @endforeach

                            <p><strong>Pemateri : {{ $materi->guru->user->name }}</strong></p>
                        </div>

                        <a href="{{ route('Detailtugas', $materi->id) }}" type="button"
                            style="background-color: #354942; margin: 10px; margin-top:40px; color: #fff; border: none; padding: 10px 55px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease; font-size: 20px;">Materi</a>

                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <!-- Isi konten ulasan di sini -->
            <h2 style="margin-bottom: 20px; margin-top: 20px;">
                <center>Ulasan Pengguna</center>
            </h2>
            <!-- Komentar pertama -->
            @foreach ($ulasan as $ul)
                <div class="comment-card">
                    <img src="{{ asset('storage/' . $ul->user->foto_user) }}" alt="Profile Picture" class="profile-picture">
                    <div class="comment-info">
                        <span class="username">{{ $ul->user->name }}</span>
                        <p class="comment-text">{{ $ul->ulasan }}</p>
                        <span class="comment-date">{{ $ul->tanggal }}</span>
                    </div>
                </div>
            @endforeach

            <!-- Komentar kedua -->
            {{-- <div class="comment-card">
            <img src="/assets/images/author2.jpg" alt="Profile Picture" class="profile-picture">
            <div class="comment-info">
                <span class="username">PenggunaLain123</span>
                <p class="comment-text">Ini adalah komentar lainnya. Mungkin lebih singkat.</p>
                <span class="comment-date">08 Desember 2023</span>
            </div>
        </div>
    </div>
  </div> --}}
            {{-- <script>
    const triggerTabList = document.querySelectorAll('#myTab button')
        triggerTabList.forEach(triggerEl => {
        const tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', event => {
            event.preventDefault()
            tabTrigger.show()
        })
        })
  </script> --}}
        @endsection
