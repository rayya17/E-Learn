@extends('layouts.layoutAdmin')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pengajuan Dana</h1>

    </div><!-- End Page Title -->

    <section class="section dashboard">
      {{-- <button type="button" class="btn btn-success btn-tarik-saldo" data-bs-toggle="modal" data-bs-target="#modalTarikSaldo" style="border-radius: 15px">Tarik Saldo</button> --}}
      <div class="row">
              <div class="col-md-12 col-lg-12">
          <div class="card">
              <div class="card-body">
          <!-- Left side columns -->
          <div class="col-lg-12">
              <div class="row">
                  <table>
                      <thead id="example1">
                          <tr>
                              <th scope="col" style="text-align: center; border-top-left-radius:10px;">No</th>
                              <th scope="col" style="text-align: center;">Nama</th>
                              <th scope="col" style="text-align: center;">Pembayaran</th>
                              <th scope="col" style="text-align: center;">Tujuan</th>
                              <th scope="col" style="text-align: center;">Keterangan</th>

                              <th scope="col" style="border-top-right-radius:10px;">Aksi</th>
                              
                          </tr>
                          </thead>
                          <tbody>
                            @php
                            $no = 1;
                        @endphp 
                            @foreach ($guru as $p)                        
                            <tr>
                              <td scope="row">{{ $no++ }}</td>
                                <td style="text-align: center;">{{ $p->user->name }}</td>
                                <td style="text-align: center;">{{ $p->metodepembayaran }}</td>
                                <td style="text-align: center;">{{ $p->tujuan_pengajuan }}</td>
                                <td style="text-align: center;">{{ $p-> keterangan_pengajuan }}</td>
                                <td style="text-align: center;">
                                  <div class="d-flex">

                                    <button style="margin-right: 10px;" class="btn btn-outline-warning detail-button" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-eye"></i></button>
                                    <form action="{{ route('terimapengajuan', ['id' => $p->id]) }}" method="post">
                                        @csrf
                                    <button style="margin-right: 10px;" type="submit" class="btn btn-outline-success"
                                    onclick=""><i
                                    class="fa-solid fa-check"></i></button>
                                    </form>
                                    <form action="{{ route('tolakpengajuan', ['id' => $p->id]) }}" method="post">
                                      @csrf
                                  <button style="margin-right: 10px;" type="submit" class="btn btn-outline-danger"
                                  onclick=""><i
                                  class="bi bi-x"></i></button>
                                  </form>
                                  </div>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
              
                           </table>
                        </div>
                  </div>
           </div>
      </div>
  </div>
</div>
{{-- modal detail --}}
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalDetailLabel">View Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="kelas" class="form-label fw-bold">Jumlah yang diajukan </label>
                <input type="text" name="tujuan_pengajuan" id="tujuan-bank" class="form-control" value="{{ old('tujuan') }}">
                @if ($errors->has('tujuan_pengajuan'))
                  <span class="text-tujuan">{{ $errors->first('tujuan_pengajuan') }}</span>
                @endif
              </div>
           
        </div>
      </div>
    </div>
  </div>

</section>    

  </main><!-- End #main -->
@endsection
