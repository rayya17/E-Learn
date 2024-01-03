    @extends('layouts.layoutUser')

    @section('content')
        <!-- Courses -->

        <div class="container">
            {{-- <form style="margin-top: 50px;" class="detail"> --}}
            <div
                style="width: 100%;

                background-color: #4FA987;
                border: 1px solid #4FA987;
                padding: 20px;
                border-radius: 10px;
                margin-top: 10px;
                height: 50px;">
                <fieldset disabled>
                    <div style="margin-top: -8px;">
                        <h5 style="color: #ffff; padding-bottom: 50px">Profile User</h5>
                        {{-- <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" width="200px"> --}}
                    </div>
                </fieldset>
            </div>
            <div class="d-flex justify-content-between">

                <div class="card">
                    <div class="card-body" style="text-align: center;">
                        @if (Auth::user()->foto_user)
                            <img src="{{ asset('storage/' . $profileuser->foto_user) }}"
                                style=" width: 140px; height: 140px; border-radius: 30px;" alt="Profile"
                                class="rounded-circle profile-image">
                        @else
                            <!-- Gambar placeholder atau logika alternatif jika foto profil tidak tersedia -->
                            <img width="50px" height="50px" class="rounded-circle profile-image"
                                src="{{ asset('storage/default/defaultprofile.jpeg') }}" alt="Placeholder">
                        @endif
                        {{-- <img src="{{ asset('storage/profile' . $profileuser->fotoProfile) }}" alt="Foto Profil" id="fotoProfilePreview" style="width: 140px; height: 175px; border-radius: 30px;"> --}}
                        <div class="card-body" style="text-align: center;">
                            <p class="card-text" style="font-weight: bold; font-size: 20px;">{{ Auth::user()->name }}</p>
                        </div>
                        <hr style="margin-top: 0;">
                        <div class="d-flex justify-content-between mb-2" style="font-weight: bold; font-size: 15px ">
                            <p>Nama :</p><span> {{ $profileuser->name }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2" style="font-weight: bold; font-size: 15px">
                            <p>No telepon :</p> <span>0{{ $profileuser->no_telepon }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2" style="font-weight: bold; font-size: 15px">
                            <p>Tanggal Lahir : </p>
                            @if ($profileuser->tanggal_lahir)
                                <span>{{ \Carbon\Carbon::parse(Auth()->user()->tanggal_lahir)->format('d M Y') }}</span>
                            @else
                                <span>Data tidak tersedia</span>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between mb-2" style="font-weight: bold; font-size: 15px">
                            <p>Email :</p><span>{{ $profileuser->email }}</span>
                        </div>
                    </div>
                </div>

                <div class="card" style="flex-grow: 1;">
                    <div class="card-body">
                        <form action="{{ route('updateProfile', $profileuser->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto Profile</label>
                                        <input type="file" name="foto_user" class="form-control" value=""
                                            style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="name" class="form-control flatpickr"
                                            value="{{ Auth::user()->name }}"
                                            style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" required>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control flatpickr"
                                            style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"
                                            value="{{ Auth::user()->email }}" readonly>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No. Telepon</label>
                                                <input type="number" name="no_telepon" class="form-control flatpickr"
                                                    value="0{{ Auth::user()->no_telepon }}"
                                                    style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"
                                                    required>
                                                @if ($errors->has('no_telepon'))
                                                    <span class="text-danger">{{ $errors->first('no_telepon') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control flatpickr"
                                                    value=""
                                                    style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"
                                                    aria-placeholder="tanggal_lahir anda">
                                                @if ($errors->has('tanggal_lahir'))
                                                    <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger" style="border-radius: 10px;">update</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

        {{-- riwayat pembelian --}}
        <div class="container mt-4">
            {{-- <form style="margin-top: 50px;" > --}}
            <div
                style="width: 100%;

                background-color: #4FA987;
                border: 1px solid #4FA987;
                padding: 20px;
                border-radius: 10px;
                margin-top: 10px;
                height: 50px;">
                <fieldset disabled>
                    <div style="margin-top: -8px;">
                        <h5 style="color: #ffff; padding-bottom: 50px">Riwayat Pembelian</h5>
                        {{-- <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" width="200px"> --}}
                    </div>
                </fieldset>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($riwayat as $order)
                    <div class="card mx-2" style="background-color: #3B9680">
                        <div class="card-header" style="color: #ffffff; font-size: 20px"><strong>{{ $order->materi->nama_materi }}</strong></div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0" style="position: relative;">
                                    <p class="ml-2 mt-2" style="color: #3B9680; padding-bottom: 12px">
                                        Pengajar : {{ $order->materi->guru->user->name }}
                                    </p>
                                    <p class="ml-2" style="color: #3B9680; padding-bottom: 12px">
                                        Kelas : {{ $order->materi->kelas }}
                                    </p>

                                <p class="ml-2" style="color: #3B9680; padding-bottom: 12px">Harga : {{ $order->total_price }}</p>
                                <br><br>
                                <h4 style="position: absolute; right:1%; bottom:0;n margin: 0;" class="mr-2 mb-2">Lunas</h4>
                            </blockquote>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- </form> --}}

        <!--/ End Courses -->
        {{-- <script>
                document.getElementById('fotoProfileInput').addEventListener('change', function (e) {
                    const preview = document.getElementById('fotoProfilePreview');
                    preview.src = URL.createObjectURL(e.target.files[0]);
                });
            </script> --}}
    @endsection
