@extends('layouts.layoutGuru')
@section('content')

<div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
        <!-- Your sidebar content goes here -->
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
        <!-- Card with an image on left -->
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card with image on left</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div><!-- End Card with an image on left -->
 <!-- Black line and title for Materi section -->
        <hr style="border-top: 2px solid #000;">
        <h2 class="mb-3">Materi</h2>

        <!-- Card for displaying PDF -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">PDF Document</h5>
                <!-- Add your PDF viewer or embed code here -->
                <embed src="your-pdf-file.pdf" type="application/pdf" width="10%" height="10px" />
            </div>
        </div><!-- End Card for displaying PDF -->

        <!-- Line underneath the description card -->
        <hr>

    </div><!-- End Main Content -->
</div><!-- End Row -->


@endsection
