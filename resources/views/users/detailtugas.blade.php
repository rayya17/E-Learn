@extends('layouts.sidebar')

@section('content')
<style>
    .card-body {
        padding: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
    }
    .card.info-card {
        /* width: 270px; */
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card.info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        padding: 20px 0 15px 0;
        font-size: 20px;
        font-weight: 500;
        color: #012970;
        font-family: "Poppins", sans-serif;
        margin-left: 20px;
    }
</style>
<div class="row px-5 mt-5">
    <!-- Card 1 -->
    <div class="col-xxl-4 col-md-4 mb-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Tugas</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-book" style="font-size: 28px;"></i>
                    </div>
                    <div class="ps-3" style="font-size: 20px; margin-bottom: 10px;">
                        <h6></h6>
                        <span class="text-success pt-1 fw-bold">{{ $jm }}</span> <span class="text-muted small pt-2 ps-1"> tugas diberikan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-xxl-4 col-md-4 mb-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Tugas Selesai</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-clipboard-check" style="font-size: 28px;"></i>
                    </div>
                    <div class="ps-3" style="font-size: 20px; margin-bottom: 10px;">
                        <h6></h6>
                        <span class="text-success pt-1 fw-bold">{{ $ts }}</span> <span class="text-muted small pt-2 ps-1"> selesai dikerjakan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-xxl-4 col-md-4 mb-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Tugas Belum</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-clipboard-list" style="font-size: 28px;"></i>
                    </div>
                    <div class="ps-3" style="font-size: 20px; margin-bottom: 10px;">
                        <h6></h6>
                        <span class="text-success pt-1 fw-bold">{{ $tb }}</span> <span class="text-muted small pt-2 ps-1"> belum dikerjakan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Point Card -->
    <div class="col-xxl-12 col-md-12 mb-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Total <span>Point</span></h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar" style="font-size: 28px;"></i>
                    </div>
                    <div class="ps-3" style="font-size: 20px; margin-bottom: 10px;">
                        <h6></h6>
                        <span class="text-danger pt-1 fw-bold">{{ $point }}</span> <span class="text-muted small pt-2 ps-1">yang di dapatkan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
