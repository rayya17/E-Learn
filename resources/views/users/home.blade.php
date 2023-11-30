@extends('layouts.layoutUser')

@section('content')
    <!-- Courses -->
    <section class="courses section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course1.jpg" alt="#"  >
                            {{-- <div class="overlay-content">
                                <a href="course-single.html" class="btn white primary">Register Now</a>
                            </div> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author1.jpg" alt="#" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                    <h4 class="title">Jewel Mathies</h4>
                                </div>
                                <span class="price" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">$350</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan consequa</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course3.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author3.jpg" alt="#">
                                    <h4 class="title">Noha Brown</h4>
                                </div>
                                <span class="price">Free</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Free PHP Web Development</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course2.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author2.jpg" alt="#">
                                    <h4 class="title">Jenola Protan</h4>
                                </div>
                                <span class="price" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">$290</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Learn Web Developments Course</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course4.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author1.jpg" alt="#">
                                    <h4 class="title">Jewel Mathies</h4>
                                </div>
                                <span class="price" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">$350</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a>
                            </h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan consequa</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course4.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author3.jpg" alt="#">
                                    <h4 class="title">Noha Brown</h4>
                                </div>
                                <span class="price">Free</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Free PHP Web Development</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan</p>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Course -->
                    <div class="single-course">
                        <!-- Course Head -->
                        <div class="course-head overlay">
                            <img src="assets/images/courses/course3.jpg" alt="#">
                            {{-- <a href="course-single.html" class="btn white primary">Register Now</a> --}}
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price">
                                <div class="teacher-info">
                                    <img src="assets/images/author2.jpg" alt="#">
                                    <h4 class="title">Jenola Protan</h4>
                                </div>
                                <span class="price" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">$290</span>
                            </div>
                            <h4 class="c-title"><a href="course-single.html">Learn Web Developments Course</a></h4>
                            <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                                shore of this uncharted Gilligan</p>

                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Open Modal
                                </button> --}}
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
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
