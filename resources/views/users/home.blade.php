@extends('layouts.layoutUser')

@section('content')
    <!-- Courses -->
    {{-- <header id="sidebar" class="sidebar justify-content-center d-flex mb-3">
        <ul class="sidebar-nav" id="sidebar-nav">
            <ul class="nav nav-pills">
                <li class="nav-item" style="border:2px solid green; border-radius:5px; margin-right:5px;">
                    <a class="nav-link filter-link {{ request()->get('kategori') === 'kelas10' ? '' : 'collapsed' }} text-dark"
                        data-kategori="10"
                        href="{{ route('HomePage', ['kategori' => 'kelas10', 'search' => request('search')]) }}"
                        aria-current="page">Kelas 10</a>
                </li>
                <li class="nav-item" style="border:2px solid green; border-radius:5px; margin-right:5px;">
                    <a class="nav-link filter-link {{ request()->get('kategori') === 'kelas11' ? '' : 'collapsed' }} text-dark"
                        data-kategori="11"
                        href="{{ route('HomePage', ['kategori' => 'kelas11', 'search' => request('search')]) }}">Kelas
                        11</a>
                </li>
                <li class="nav-item" style="border:2px solid green; border-radius:5px; margin-right:5px;">
                    <a class="nav-link filter-link {{ request()->get('kategori') === 'kelas12' ? '' : 'collapsed' }} text-dark"
                        data-kategori="12"
                        href="{{ route('HomePage', ['kategori' => 'kelas12', 'search' => request('search')]) }}">Kelas
                        12</a>
                </li>
            </ul>
        </ul>
    </header> --}}

    <script>
        const filterLinks = document.querySelectorAll('.filter-link');

        filterLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const kategori = this.dataset.kategori;
                const currentUrl = new URL(this.href, window.location.href);
                currentUrl.searchParams.set('kategori', kategori);
                window.location.href = currentUrl.toString();
            });
        });
    </script>
    <section class="courses section" style="background-color: white">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($materi as $mtr)
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Course -->
                        <div class="single-course" style="min-height: 400px;">
                            <a href="{{ url('detailmateri_user/' . $mtr->id) }}">
                                <!-- Course Head -->
                                <div class="course-head overlay">
                                    <img src="{{ asset('storage/default/' . $mtr->cover) }}" alt="#">
                                </div>
                                <!-- Course Body -->
                                <div class="course-body">
                                    <div class="name-price">
                                        <div class="teacher-info">
                                            {{-- @foreach ($guru as $gr) --}}
                                            <img src="{{ asset('storage/profile/' . $mtr->guru->user->foto_user) }}"
                                                alt="#" class="rounded-circle"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                            {{-- @endforeach --}}
                                        </div>
                                        @php
                                            $currentOrder = $ordertah->where('materi_id', $mtr->id)->first();
                                        @endphp
                                        @if (!$currentOrder)
                                            @if ($order)
                                                <span class="price" data-materi="{{ $mtr->nama_materi }}"
                                                    data-harga="{{ $mtr->harga }}">
                                                    Rp. {{ number_format($mtr->harga, 0, ',', '.') }}
                                                </span>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="kelas d-flex">
                                        <h5 style="margin-right:auto; color: black">{{ $mtr->mapel }}</h5>
                                        <h7 style="color:black">Kelas : {{ $mtr->kelas }}</h7>
                                    </div>
                                    <p>{{ $mtr->keterangan_benefit }}</p>
                                </div>
                            </a>
                            <div>
                                @if ($currentOrder)
                                    <!-- Iterate through the order collection and access status property -->
                                    @if ($currentOrder->status == 'Paid')
                                        <!-- Display Ulasan button for Paid orders -->
                                        <button type="button" class="btn-ulasan" data-materi="{{ $mtr->id }}"
                                            data-toggle="modal" data-target="#UlasanModal"
                                            style="position: absolute; bottom: 10px; right: 30px; font-size: 15px; background-color:#388064; width:90px; border-radius:10px; color:white">
                                            <i class="fa-regular fa-message" style="margin:5px;"></i>
                                            <span>Ulasan</span>
                                        </button>
                                    @else
                                        <!-- Display Pesan Sekarang button for Unpaid orders -->
                                        <form action="{{ route('checkout', $mtr->id) }}" method="post">
                                            @csrf
                                            <button
                                                class="btn btn btn-sm buy-now-btn d-flex justify-content-center align-items-center"
                                                type="submit" style="border-radius: 30px; margin-right: 10px">
                                                Pesan Sekarang
                                            </button>
                                        </form>
                                    @endif
                                @else
                                    <!-- Display Pesan Sekarang button if no order found -->
                                    <form action="{{ route('checkout', $mtr->id) }}" method="post">
                                        @csrf
                                        <button
                                            class="btn btn btn-sm buy-now-btn d-flex justify-content-center align-items-center"
                                            type="submit"
                                            style="border-radius: 30px; margin-right: 10px; position: absolute; bottom: 10px; right: 20px">
                                            Pesan Sekarang
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                        <!--/ End Single Course -->
                    </div>
                    <!-- Modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="UlasanModal" tabindex="-1" role="dialog"
                        aria-labelledby="UlasanModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="UlasanModalLabel">Ulasan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('ulasan.store') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <center><label for="ulasan" class="col-sm-6 col-form-label"><strong> Silahkan
                                                    Berikan Ulasan Anda</strong></label></center>
                                        <div class="row mb-3">
                                            <input type="hidden" name="materi" id="UlasanInput">
                                            <div class="col-sm-12">
                                                <!-- Sesuaikan dengan data user -->
                                                <textarea name="ulasan" placeholder="Masukkan ulasan Anda"style="width: 100%; min-width: 470px;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-warning">Tambahkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalTriggerButtons = document.querySelectorAll('.btn-ulasan');
            console.log(modalTriggerButtons);

            modalTriggerButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var pesananId = this.getAttribute('data-materi');
                    console.log(pesananId);
                    document.getElementById('UlasanInput').value = pesananId;
                });
            });
        });
    </script>
@endsection