@extends('layouts.layoutAdmin')

@section('content')
<style>

    .col-lg-3.mb-4 .card {
        transition: transform 0.3s ease-in-out;
    }

    .col-lg-3.mb-4 .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .modal-address {
        max-height: 100px; /* Set a maximum height for the address section */
        overflow-y: auto; /* Add scroll for overflow */
    }

    .modal-content {
        display: flex;
    }

    .modal-content .col-lg-4 {
        flex: 0 0 33.333333%;
    }

    .modal-content .col-lg-8 {
        flex: 0 0 66.666667%;
    }


</style>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile Guru</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            {{-- <div class="row"> --}}

            <!-- Left side columns -->
            <div class="container mt-3">
                <div class="row">
                    @foreach ($profileguru as $p)
                        @if (strtolower(trim($p->user->role)) === 'guru')
                            <div class="col-lg-3 mb-4">
                                <!-- Adjust col-lg-4 for the desired card width and mb-4 for margin bottom -->
                                <div class="card text-white" style="background-color: #4FA987;">
                                    <!-- Change bg-success to your desired background color -->
                                    <div class="card-body text-center">
                                        <img class="mt-4" src="{{ asset('storage/profile/' . $p->user->foto_user) }}"
                                            alt="profile"
                                            style="border-radius: 50px; width: 100px; height: 100px;object-fit: cover; ">
                                        <!-- Adjust width and height as needed -->
                                        <div class="card-content mt-2">
                                            <h5><strong>{{ $p->user->name }}</strong></h5>
                                        </div>
                                        <div class="card-content">
                                            <p>{{ $p->pendidikan }}</p>
                                        </div>
                                        {{-- <a href="{{ route('Detailguru', ['id' => $p->id]) }}"> --}}
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}" class="btn btn-warning mt-3" style="height: 24px;width: 87px;margin: 0;padding: 0;color: #fff">
                                                Detail
                                            </button>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Profile</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card text-white" style="background-color: #4FA987;">
                                                        <div class="card-body text-center">
                                                            <img src="{{ asset('storage/profile/'.$p->user->foto_user) }}" alt="profile"
                                                                style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
                                                            <div class="mt-3">
                                                                <h4>{{ $p->user->name }}</h4>
                                                                <h6>{{ $p->pendidikan }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 mt-6" style="font-family: 'Poppins';">
                                                    <div class="card w-100">
                                                        <div class="card-body">
                                                            <dl class="row" style="margin-bottom: -30px;">
                                                                <dt class="col-sm-5">Nama Lengkap</dt>
                                                                <dd class="col-sm-7">: {{ $p->user->name }}</dd>

                                                                <dt class="col-sm-5">Pendidikan Terakhir</dt>
                                                                <dd class="col-sm-7">: {{ $p->pendidikan }}</dd>

                                                                <dt class="col-sm-5">No Telepon</dt>
                                                                <dd class="col-sm-7">: {{ $p->user->no_telepon }}</dd>

                                                                <dt class="col-sm-5">Email</dt>
                                                                <dd class="col-sm-7">: {{ $p->user->email }}</dd>

                                                                <dt class="col-sm-5">Alamat</dt>
                                                                <dd class="col-sm-1" style="margin-right: -23px;">:</dd>
                                                                <dd class="col-sm-6 row"><p class=" modal-address"> {{ $p->alamat }}</p></dd>
                                                            </dl>
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

    </main>
    <!-- End #main -->
@endsection
<script>
    $(document).ready(function() {
        $('.btn-detail').click(function() {
            var guruId = $(this).data('guruid');
            $('#exampleModal' + guruId).modal('show');
        });
    });
</script>

