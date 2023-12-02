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
              @foreach ($profileguru as $p )
                  <div class="col-lg-3 mb-4"> <!-- Adjust col-lg-4 for the desired card width and mb-4 for margin bottom -->
                      <div class="card text-white"  style="background-color: #4FA987;"> <!-- Change bg-success to your desired background color -->
                          <div class="card-body text-center">
                              <img src="{{ $p->imageSource }}" alt="profile" style="border-radius: 50px; width: 100px; height: 100px;"> <!-- Adjust width and height as needed -->
                              <div class="card-content mt-3">
                                  <h4>{{ $p->pendidikan }}</h4>
                                  <h5>subjudul</h5>
                              </div>
                              <div class="mt-3">
                                  <a href="{{ route('Detailguru', ['id' => $p->id]) }}" class="btn btn-warning">Detail</a>
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
