@extends('layouts.layoutAdmin')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Detail guru</h1>
    </div><!-- End Page Title -->


      {{-- <div class="row"> --}}

        <!-- Left side columns -->
        <div class="content-inner mt-3 py-0">
          <div class="row">
            @foreach ($gurudetail as $gd)

            <div class="col-lg-6 col-xl-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-lg-3 mt-4">
                            <div class="card text-white" style="background-color: #4FA987;">
                              <div class="card-body text-center">
                                <img class="mt-4" src="{{ asset('storage/profile/'.$gd->foto_profile) }}" alt="profile" style="border-radius: 50px; width: 100px; height: 100px;object-fit: cover">
                                <div class="card-content">
                                  <h4>{{ $gd->user->name }}</h4>
                                  <h5>{{ $gd->pendidikan }}</h5>
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

  </main><!-- End #main -->
@endsection
