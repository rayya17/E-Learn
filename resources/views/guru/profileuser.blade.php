@extends('layouts.navbar')

@section('content')

<div class="main-content py-3 px-3 mt-1 ">
    <div class="container-fluid">
        <div class=" mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="card mx-auto" style="width: 20% ">
                        <div class="">
                            <center>
                                <img src="{{ asset('storage/profile/' . Auth::user()->foto_user) }}" alt="foto profilenya"
                                    style="width: 250px; object-fit:cover; height: 270px; border-radius: 20px; box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.3);"
                                    class="card-img-top" alt="...">
                            </center>
                        </div>

                    </div>
                    <h5 class="text-bold"  style="color: #000000; font-weight: bold;">Profile</h5>
                    <hr style="border-width: 7px;">
                    @foreach ($profileguru as $user )
                    <form action="{{ route('profileguruUp', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" style="border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);" value="{{ Auth::user()->name }}" required>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" style="border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);" value="{{ Auth::user()->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea type="text" name="alamat" class="form-control" style="border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);" required>{{ $user->alamat }}</textarea>
                                @if ($errors->has('alamat'))
                                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan" class="form-control" style="border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);" value="{{ $user->pendidikan }}" required>
                                @if ($errors->has('pendidikan'))
                                    <span class="text-danger">{{ $errors->first('pendidikan') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>No Telepon </label>
                                <input type="number" name="no_telepon" class="form-control" style="border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);" value="0{{Auth::user()->no_telepon}}" required>
                                @if ($errors->has('no_telepon'))
                                    <span class="text-danger">{{ $errors->first('no_telepon') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Perbarui Foto Anda</label>
                                @if ($user->foto_user === null)
                                <input type="file" name="foto_user"
                                    class="form-control" value="" style="border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
                            @else
                                <input type="file" name="foto_user"
                                    class="form-control"
                                    value="{{ $user->foto_user }}">
                                <img src="{{ asset('storage/' . $user->foto_user) }}"
                                    style="width: 150px; ">
                            @endif
                            </div>
                        </div>
                    </div>
                        {{-- <div class="d-flex justify-content-start mt-5"> <!-- Add margin-top for spacing between buttons -->
                            <button type="button" class="btn btn-danger" onclick="cancelUpdate({{ $user->id }})">cancel</button>
                        </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger" style="border-radius: 5px;">update</button>
                            </div> --}}
                            {{-- <div class="modal-footer"> --}}
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary mr-2" onclick="goToDashboard()" style="border-radius: 5px;" >Kembali</button>
                                <button type="submit" class="btn btn-success" style="border-radius: 5px;">update</button>
                            </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Ajax--}}
<script>
    function updateProfile(userId) {
        var formData = new FormData($("#updateForm" + userId)[0]);

        $.ajax({
            type: "POST",
            url: "{{ route('profileguruUp', ['id' => '$user->id']) }}" + "/" + userId,
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
    function goToDashboard() {
        // Redirect to the dashboard route
        window.location.href = "{{ route('dashboardguru') }}";
    }
</script>
@endsection

