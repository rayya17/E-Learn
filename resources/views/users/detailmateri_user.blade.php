@extends('layouts.layoutUser')

@section('content')
<style>
    .semua {
        background-color: #ffffff; /* Ganti warna latar belakang sesuai kebutuhan Anda */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk elemen */
    }

    .title {
        background-color: #ffffff; /* Ganti warna latar belakang sesuai kebutuhan Anda */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk elemen */
    }

    .tab-pane {
        margin-top: 20px;
    }

    .card {
        background-color: #bebaba; /* Ganti warna latar belakang sesuai kebutuhan Anda */
        padding: 15px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk elemen */
    }

    /* font nya */

    h2, h4, h6 {
        color: #343a40; /* Warna teks sesuai kebutuhan Anda */
    }

    p, span {
        color: #6c757d; /* Warna teks sesuai kebutuhan Anda */
    }

    /* Atur ukuran dan gaya huruf sesuai kebutuhan */
    h2 {
        font-size: 28px;
        font-weight: bold;
    }

    h4 {
        font-size: 20px;
    }

    h6 {
        font-size: 16px;
    }

    p {
        font-size: 18px;
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
                <h2 style="margin-bottom: 20px; margin-top: 20px;">Detail Materi:</h2>
                <div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">

                    <div class="cover">
                        <img style="width: 500px;" src="{{ asset('storage/default/' . $materi->cover) }}">
                    </div>
                    <div class="title" style="margin-bottom: 50px;">
                       <div class="card-header" style="background-color: #ffffff">
                        <div class="kelas d-flex">
                            <h4 style="margin-right:auto">{{ $materi->mapel }}</h4>
                            <h6>Kelas : {{ $materi->kelas }}</h6>
                        </div>
                       </div>
                        <br>
                        <h1 style="font-size: 80px; gap-5"><strong>{{ $materi->nama_materi }}</strong></h1>
                        <br>
                        <div class="content">
                                <p style="font-size: 20px;">Benefit materi: {{ $materi->keterangan_benefit }}</p>
                                <br>

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
            <div id="testimoni" class="w-full bg-slate-100   h-screen">
                <div class="mx-5 justify-content-center">
                    <div class="mt-8">
                        <div class=" mx-auto mt-4 mb-4">
                            {{-- <p class="text-4xl text-center font-semibold mb-2">Testimoni Kami</p> --}}
                            <p class=" text-center text-base " style="font-size: 15px;">Berikut adalah beberapa ulasan
                                dari <br>user yang telah memesan materi disni</p>
                        </div>
                        <div class="row justify-content-center">
                            @foreach ($ulasan as $ul)
                                <div class="col-md-3">
                                    <div class="card hover:-translate-y-2 rounded-lg duration-300 ease-in-out transition border-2 hover:border-blue-600  shadow-md"
                                        style="min-height: 250px;">
                                        <div class="card-body">
                                            <div class="text-2xl text-center font-semibold flex gap-x-[20rem] ">
                                                @if ($ul->user->foto_user)
                                                <img src="{{ asset('storage/' . $ul->user->foto_user) }}"
                                                    style="margin-bottom: 10px;" alt="Profile Picture"
                                                    class="profile-picture">
                                                    @else
                                                    <!-- Gambar placeholder atau logika alternatif jika foto profil tidak tersedia -->
                                                    <img class="rounded-circle profile-image" src="{{ asset('storage/default/defaultprofile.jpeg') }}" style="width: 80px; height: 80px; margin-bottom: 10px;" alt="Placeholder">
                                                @endif
                                                <p class="text-xl font-bold mb-1" style="font-weight: bold;">
                                                    {{ $ul->user->name }} </p>
                                                <p class="text-base font-bold"><span style="font-weight: bold;">Ulasan
                                                        :</span> <span class="font-semibold">{{ $ul->ulasan }} </span>
                                                </p>
                                                <span
                                                    class="comment-date">{{ date('d F Y', strtotime($ul->tanggal)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endsection
