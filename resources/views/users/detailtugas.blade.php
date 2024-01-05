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
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6></h6>
                  <span class="text-success small pt-1 fw-bold">{{ $jm }}</span> <span class="text-muted small pt-2 ps-1">increase</span>
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
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6></h6>
                  <span class="text-success small pt-1 fw-bold">{{ $ts }}</span> <span class="text-muted small pt-2 ps-1">increase</span>
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
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6></h6>
                  <span class="text-success small pt-1 fw-bold">{{ $tb }}</span> <span class="text-muted small pt-2 ps-1">increase</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-xxl-12 col-md-12 mb-4">
          <div class="card info-card revenue-card" style="min-height: 90%">
            <div class="card-body" style="padding: 10px">
              <h5 class="card-title">Jumlah <span>Skor</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6></h6>
                  <span class="text-danger small pt-1 fw-bold">{{ $point }}</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
