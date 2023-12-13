@extends('layouts.layoutAdmin')

@section('content')
{{--
@foreach($calonguru as $data)
<div class="modal fade" id="myModal_{{ $data->id }}" tabindex="-1" aria-labelledby="#myModal_{{ $data->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal_{{ $data->id }}">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label>foto bukti sertifikat</label>
          <img src="{{ asset('storage/sertifikat/' . $data->foto_sertifikat)}}"
          alt="">
        </div>
        <div class="mb-3">
          <label>foto KTP</label>
          <img src="{{ asset('storage/sertifikat/' . $data->foto_sertifikat)}}"
          alt="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
  @endforeach --}}
  <main id="main" class="main">

    <div class="pagetitle mt-4">
      <h1>Persetujuan</h1>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      {{-- <div class="row"> --}}
<div class="col-lg-12 mt-4">
        <!-- Left side columns -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <table class="table">
                        <thead >
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto Anda</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Pendidikan Terakhir</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Alamat</th>
                                {{-- <th scope="col">Sertifikat</th>
                                <th scope="col">Ktp</th> --}}
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
                                    <td><img width="120px" height="100px"
                                      src="{{ asset('storage/profile/' . $data->user->foto_user)}}" alt=""></td>
                                      <td>{{ $data->user->name }}</td>
                                      <td>{{ $data->pendidikan }}</td>
                                      <td>{{ $data->user->no_telepon }}</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    {{-- <td><img width="120px" height="150px"
                                            src="{{ asset('storage/sertifikat/' . $data->foto_sertifikat)}}"
                                            alt=""></td>
                                    <td><img width="120px" height="150px" src="{{ asset('storage/ktp/' . $data->foto_ktp) }}" alt=""></td> --}}
                                    <td  class="d-flex">
                                      {{-- <a class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#myModal_{{ $data->id }}" ><i class="far fa-eye"></i></a> --}}
                                        <form action="{{ route('terimaguru',$data->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-outline-success" style="margin-right: 2px;"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </form>
                                        <form class="d-flex" action="{{ route('tolakguru', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm me-2" onclick="confirmDelete(event)"><i
                                                    class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>

                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal -->
                </div>
            </div>
        </div>
    </div>
        </div><!-- End Left side columns -->
    </div>

        <!-- Right side columns -->
      <!-- End Right side columns -->

      {{-- </div> --}}
    </section>

  </main><!-- End #main -->
@endsection
