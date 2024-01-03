@extends('layouts.sidebar')

@section('content')
   <!-- Revenue Card -->
   <div class="row px-5 mt-5">

    <div class="col-xxl-3 col-md-3">
      <div class="card info-card revenue-card " style="min-height: 90%">
        <div class="card-body" style="padding: 10px">
          <h5 class="card-title">Jumlah Materi</h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              <h6></h6>
              <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xxl-3 col-md-3">
      <div class="card info-card revenue-card " style="min-height: 90%">
        <div class="card-body" style="padding: 10px">
          <h5 class="card-title">Jumlah Siswa</h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              <h6></h6>
              <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Customers Card -->
    <div class="col-xxl-2 col-md-3">
      <div class="card info-card customers-card " style="min-height: 90%">
        <div class="card-body" style="padding: 10px">
          <h5 class="card-title">Jumlah Transaksi </h5>
          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-currency-dollar"></i>
            </div>
            <div class="ps-3">
              <h6></h6>
              <span class="text-danger small pt-1 fw-bold">12%</span>
              <span class="text-muted small pt-2 ps-1">decrease</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Customers Card -->

    <div class="col-xxl-2 col-md-3 " >
      <div class="card info-card customers-card" style="min-height: 90%">
        <div class="card-body" style="padding: 10px">
          <h5 class="card-title">Saldo <span>| Bulan ini</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-currency-dollar"></i>
            </div>
            <div class="ps-3">
                <h6></h6>
                <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

            </div>
          </div>

        </div>
      </div>

    </div>
   </div>
@endsection
