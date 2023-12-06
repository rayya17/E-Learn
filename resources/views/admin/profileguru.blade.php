@extends('layouts.layoutAdmin')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile Guru</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            {{-- <div class="row"> --}}

            <!-- Left side columns -->
            <div class="container mt-4">
                <div class="row">
                    @foreach ($profileguru as $p)
                        @if (strtolower(trim($p->user->role)) === 'guru')
                            <div class="col-lg-3 mb-4">
                                <!-- Adjust col-lg-4 for the desired card width and mb-4 for margin bottom -->
                                <div class="card text-white" style="background-color: #4FA987;">
                                    <!-- Change bg-success to your desired background color -->
                                    <div class="card-body text-center">
                                        <img class="mt-4" src="{{ asset('storage/profile/' . $p->foto_profile) }}"
                                            alt="profile"
                                            style="border-radius: 50px; width: 100px; height: 100px;object-fit: cover; ">
                                        <!-- Adjust width and height as needed -->
                                        <div class="card-content mt-2">
                                            <h4><strong>{{ $p->user->name }}</strong></h4>
                                        </div>
                                        <div class="card-content">
                                            <p>{{ $p->pendidikan }}</p>
                                        </div>
                                        {{-- <a href="{{ route('Detailguru', ['id' => $p->id]) }}"> --}}
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            class="btn btn-warning mt-3"
                                            style="height: 24px;width: 87px;margin: 0;padding: 0;color: #fff">
                                            Detail
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Modal -->
                        <div class="modal fade"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" style="width: 150%;">
                                <div class="modal-content" style="width: 150%;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Profile</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                      <div class="col-lg-4 mt-4">
                                                        <div class="card text-white" style="background-color: #4FA987;">
                                                          <div class="card-body text-center">
                                                            <img class="mt-4" src="{{ asset('storage/profile/'.$p->foto_profile) }}" alt="profile" style="border-radius: 50px; width: 100px; height: 100px;object-fit: cover">
                                                            <div class="card-content">
                                                              <h4>{{ $p->user->name }}</h4>
                                                              <h5>{{ $p->pendidikan }}</h5>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-lg-6 mt-4" style="margin-left: 40px; font-family: 'Poppins';">
                                                        <p><b>Nama Lengkap :</b> {{ $p->user->name }}</p>
                                                        <p><b>Pendidikan Terkahir :</b> {{ $p->pendidikan }}</p>
                                                        <p><b>Alamat :</b> {{ $p->alamat }}</p>
                                                        <p><b>No Telepon :</b> {{ $p->user->no_telepon }}</p>
                                                        <p><b>Email :</b> {{ $p->user->email }}</p>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <!-- Right side columns -->
            <!-- End Right side columns -->

            {{-- </div> --}}
        </section>

    </main><!-- End #main -->
@endsection
