@extends('layouts.layoutUser')

@section('content')


    <!-- Courses -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <ul class="nav nav-pills" style="margin-left: 80px;">
                <li class="nav-item" style="border:2px solid green; border-radius:5px; margin-right:5px;">
                  <a class="nav-link {{ request()->is('kelas10') ? '' : 'collapsed' }}"  href="{{ url('/home') }}" aria-current="page">Kelas 10</a>
                </li>
                <li class="nav-item" style="border:2px solid green; border-radius:5px; margin-right:5px;">
                  <a class="nav-link {{ request()->is('kelas11') ? '' : 'collapsed' }}" href="{{ url('/home') }}">Kelas 11</a>
                </li>
                <li class="nav-item" style="border:2px solid green; border-radius:5px; margin-right:5px;">
                  <a class="nav-link {{ request()->is('kelas12') ? '' : 'collapsed' }}" href="{{ url('/home') }}">Kelas 12</a>
                </li>
              </ul>
        </ul>
    </aside>
    <section class="courses section">
        <div class="container">
            <div class="row">
                @foreach ($materi as $mtr)
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Course -->
                        <div class="single-course" style="min-height: 400px;">
                            <!-- Course Head -->
                            <div class="course-head overlay">
                                <img src="{{ asset('storage/default/' . $mtr->cover) }}" alt="#">
                            </div>
                            <!-- Course Body -->
                            <div class="course-body">
                                <div class="name-price">
                                    <div class="teacher-info">
                                        {{-- @foreach ($guru as $gr) --}}
                                            <img src="{{ asset('storage/profile/' . $mtr->guru->foto_profile) }}" alt="#"
                                                class="rounded-circle"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                        {{-- @endforeach --}}
                                    </div>
                                    <span class="price" data-toggle="modal" data-target="#exampleModal"
                                        data-materi="{{ $mtr->nama_materi }}" data-harga="{{ $mtr->harga }}">Rp.
                                        {{ $mtr->harga }}</span>
                                </div>
                                <h4 class="c-title"><a href="course-single.html">{{ $mtr->nama_materi }}</a></h4>
                                <p>{{ $mtr->deskripsi }}</p>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <form action="{{ route('checkout', $mtr->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn btn-sm buy-now-btn" type="submit" style="border-radius: 30px; margin-right: 10px">Pesan Sekarang</button>                                </form>
                                <a href="{{ route('DetailPemesanan') }}" class="btn btn btn-sm cancel" style="border-radius: 30px;">Pesan</a>
                            </div>
                        </div>
                       <div>
                       </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
