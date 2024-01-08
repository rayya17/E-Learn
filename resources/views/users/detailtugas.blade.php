@extends('layouts.sidebar')

@section('content')
   <div class="row px-5 mt-5">
    <div class="col-xxl-6 col-md-6">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-xxl-12 col-md-12 mb-4">
          <div class="card info-card revenue-card" style="min-height: 90%">
            <div class="card-body" style="padding: 10px">
              <h5 class="card-title">Jumlah Tugas</h5>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <h2 class="text-success pt-1 fw-bold" >{{ $jm }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-xxl-12 col-md-12 mb-4">
          <div class="card info-card revenue-card" style="min-height: 90%">
            <div class="card-body" style="padding: 10px">
              <h5 class="card-title">Tugas Selesai</h5>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <h2 class="text-success pt-1 fw-bold">{{ $ts }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-6 col-md-6">
      <div class="row">
        <!-- Card 3 -->
        <div class="col-xxl-12 col-md-12 mb-4">
          <div class="card info-card revenue-card" style="min-height: 90%">
            <div class="card-body" style="padding: 10px">
              <h5 class="card-title">Tugas Belum</h5>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <h2 class="text-success  pt-1 fw-bold">{{ $tb }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-xxl-12 col-md-12 mb-4">
          <div class="card info-card revenue-card" style="min-height: 90%">
            <div class="card-body" style="padding: 10px">
              <h5 class="card-title">Total <span>Point</span></h5>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <h2 class="text-danger pt-1 fw-bold">{{ $point }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
