@extends('layouts.layoutUser')

@section('content')
    <!-- Courses -->
    <section class="courses section">
        <div class="container">
            <div class="row">
                @foreach ($materi as $mtr)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    {{-- <div class="row"> --}}
                    <div class="single-course" style=" min-height: 400px;">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="{{ asset('storage/default/' . $mtr->cover) }}" alt="#"  >
                            {{-- <div class="overlay-content">
                                <a href="course-single.html" class="btn white primary">Register Now</a>
                            </div> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    @foreach ($guru as $gr)
                                    <img src="{{ asset('storage/profile/' . $gr->foto_profile) }}" alt="#" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                    {{-- <h4 class="title">Jewel Mathies</h4> --}}
                                    @endforeach
                                </div>
                                <span class="price" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Rp. {{ $mtr->harga }}</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">{{ $mtr->nama_materi }}</a></h4>
                            <p>{{ $mtr->deskripsi }}</p>
                        </div>
                    {{-- </div> --}}
                    </div>
                    <!--/ End Single Course -->
                </div>
                @endforeach
            </div>
        </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="text" name="materi" class="form-control" id="materi" width="200px">
                    </div>
                </div>
                <label for="inputText" class="col-sm-6 col-form-label">Pilih Jangka Pemesanan</label>
                <div class="row mb-2">
                    <div class="col-sm-12" width="200px">
                        <select class="form-select form-select-sm mb-3" name="metode_pembayaran" aria-label="Large select example" id="metode_pembayaran" width="200px">
                            <option selected >Pilih Jangka Pemesanan</option>
                            <option value="sebulan">1 Bulan</option>
                            <option value="duabulan">2 Bulan</option>
                            <option value="tigabulan">3 Bulan</option>
                        </select>
                    </div>
                </div>
                <label for="inputText" class="col-sm-2 col-form-label" style="margin-top: 0px; padding: 0px">Harga</label>
                <div class="row mb-3">
                    <div class="col-sm-12">
                    <input type="text" name="harga" class="form-control" id="harga" width="200px">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Buy Now</button>
                <a href="{{ route('DetailPemesanan') }}"><button type="button" class="btn btn-primary">Konfirmasi</button></a>
            </div>
        </div>
    </div>
</div>
    </section>
    @endsection
    {{-- <div class="modal" id="myModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="inputText" class="col-sm-4 col-form-label">metode pembayaran</label>
                <div class="row mb-3">
                    <div class="col-sm-12">
                    <select class="form-select form-select-SM mb-3" name="metode_pembayaran" aria-label="Large select example" id="metode_pembayaran">
                        <option selected>Pilih metode</option>
                        <option value="BANK">BANK</option>
                        <option value="E-WALET">E-WALET</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div> --}}
    <!--/ End Courses -->
