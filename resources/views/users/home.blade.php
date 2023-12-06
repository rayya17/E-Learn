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
                                            <img src="{{ asset('storage/profile/' . $mtr->guru->foto_profile) }}"
                                                alt="#" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                        {{-- @endforeach --}}
                                    </div>
                                    <span class="price" data-toggle="modal" data-target="#exampleModal"
                                        data-materi="{{ $mtr->nama_materi }}" data-harga="{{ $mtr->harga }}">Rp.
                                        {{ $mtr->harga }}</span>
                                </div>
                                <h4 class="c-title"><a href="course-single.html">{{ $mtr->nama_materi }}</a></h4>
                                <p>{{ $mtr->deskripsi }}</p>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembelian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="inputText" class="col-sm-2 col-form-label">Materi</label>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input type="text" name="materi" class="form-control" id="materi" readonly>
                            </div>
                        </div>
                        <label for="inputText" class="col-sm-6 col-form-label">Pilih Jangka Pemesanan</label>
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <select class="form-select form-select-sm mb-3" name="metode_pembayaran"
                                    aria-label="Large select example" id="metode_pembayaran" style="width: 500px;">
                                    <option selected>Pilih Jangka Pemesanan</option>
                                    <option value="sebulan">1 Bulan</option>
                                    <option value="duabulan">2 Bulan</option>
                                    <option value="tigabulan">3 Bulan</option>
                                </select>
                            </div>
                        </div>
                        <label for="inputText" class="col-sm-2 col-form-label" style="margin-top: 0px; padding: 0px">Harga</label>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input type="text" name="harga" class="form-control" id="harga" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Buy Now</button>
                        <a href="{{ route('DetailPemesanan') }}"><button type="button"
                                class="btn btn-primary">Konfirmasi</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var materi = button.data('materi');
                var harga = button.data('harga');
                var modal = $(this);
                modal.find('#materi').val(materi);
                modal.find('#harga').val(harga);
            });
        });
    </script>
@endsection
