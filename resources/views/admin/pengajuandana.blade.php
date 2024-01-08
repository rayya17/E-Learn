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
                                @forelse ($guru as $p)
                                <tr>
                                <td scope="row" style="text-align: center;">{{ $no++ }}</td>
                                    <td style="text-align: center;">{{ $p->user->name }}</td>
                                    <td style="text-align: center;">{{ $p->metodepembayaran }}</td>
                                    <td style="text-align: center;">{{ $p->tujuan_pengajuan }}</td>
                                    <td style="text-align: center;">{{ $p->keterangan_pengajuan }}</td>
                                    <td style="text-align: center;">
                                    <div class="d-flex">

                                        {{-- <button style="margin-right: 10px;" class="btn btn-outline-warning detail-button" data-bs-toggle="modal" data-bs-target="#modalDetail"><i class="bi bi-eye"></i></button> --}}
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
                            @empty
                            <tr>
                                <td colspan="8" style="text-align: center;"><h7>Data Tidak Ada</h7></td>
                            </tr>
                            @endforelse
                            <!-- Add more rows as needed -->
                        </tbody>

                    </table>

                    <!-- Pagination links -->
                  {{-- {{ $guru->links() }} --}}
                    </div>
                    <div class="d-flex justify-content-center" style="margin-top: 20px;">
                        {!! $guru->links('pagination::bootstrap-4')->with([
                            'class' => 'pagination',
                            'style' => 'margin-top: 20px;'
                        ]) !!}
                    </div>
                </div>
           </div>
      </div>
  </div>
</div>
{{-- modal detail --}}

</section>

  </main><!-- End #main -->
@endsection
