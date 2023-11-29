<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Approve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
    .container {
        padding: 2rem 0rem;
    }

    h4 {
        margin: 2rem 0rem 1rem;
    }

    .table-image {

        td,
        th {
            vertical-align: middle;
        }
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto Anda</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Pendidikan Terakhir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Sertifikat</th>
                            <th scope="col">Ktp</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($calonguru as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->user->name }}</td>
                                <td><img width="120px" height="150px"
                                        src="{{ asset('storage/profile/' . $data->foto_profile)}}" alt=""></td>
                                <td>{{ $data->no_telepon }}</td>
                                <td>{{ $data->pendidikan }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td><img width="120px" height="150px"
                                        src="{{ asset('storage/sertifikat/' . $data->foto_sertifikat)}}"
                                        alt=""></td>
                                <td><img width="120px" height="150px" src="{{ asset('storage/ktp/' . $data->foto_ktp) }}" alt=""></td>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                    <form action="{{ route('terimaguru',$data->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submid" class="btn btn-success"><i
                                                class="fa-solid fa-check"></i></button>
                                    </form>
                                    <form class="d-flex" action="{{ route('tolakguru', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm me-2" onclick="confirmDelete(event)"><i
                                                class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Logout</button>
                </form>
                <!-- Modal -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
