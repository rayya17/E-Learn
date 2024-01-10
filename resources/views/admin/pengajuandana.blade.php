@extends('layouts.layoutAdmin')

@section('content')

<style>
    .custom-table {
        width: 100%;
    }

    .custom-table th,
    .custom-table td {
        padding: 12px;
        text-align: center;
    }

    .custom-table th {
        background-color: #4FA987;
        color: #fff;
    }

    .custom-table tbody tr:hover {
        background-color: #f5f5f5;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>

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
                <table class="custom-table">
                    <thead id="example1">
                        <tr>
                            <th scope="col" style="text-align: center; border-top-left-radius:15px;">No</th>
                            <th scope="col" style="text-align: center;">Nama</th>
                            {{-- <th scope="col" style="text-align: center;">Nominal</th> --}}
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
                            {{-- @dd($p->pendapatan->order_id) --}}
                            <td scope="row" style="text-align: center;">{{ $no++ }}</td>
                            <td style="text-align: center;">{{ $p->user->name }}</td>
                            {{-- <td style="text-align: center;">Rp. {{ number_format($p->pendapatan->pendapatan) }}</td> --}}
                            <td style="text-align: center;">{{ $p->metodepembayaran }}</td>
                            <td style="text-align: center;">{{ $p->tujuan_pengajuan }}</td>
                            <td style="text-align: center;">{{ $p->keterangan_pengajuan }}</td>
                            <td style="text-align: center;">
                                <div class="d-flex">
                                    {{-- <button style="margin-right: 10px;" class="btn btn-outline-warning detail-button" data-bs-toggle="modal" data-bs-target="#modalDetail"><i class="bi bi-eye"></i></button> --}}
                                    <form data-id="{{ $p->id }}" action="{{ route('terimapengajuan', ['id' => $p->id,'order_id' => $p->pendapatan->order_id]) }}" method="post" class="accept-form">
                                        @csrf
                                        <button style="margin-right: 10px;" type="submit" class="btn btn-outline-success"><i class="fa-solid fa-check"></i></button>
                                    </form>
                                    <form id="delete-form-{{ $p->id }}"
                                        action="{{ route('tolakpengajuan', ['id' => $p->id]) }}"
                                        method="post" data-id="{{ $p->id }}"
                                        class="delete-form">
                                        @csrf
                                        <button style="margin-right: 10px;" type="submit"
                                            class="btn btn-outline-danger"><i class="bi bi-x"></i></button>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    // Tambahkan event listener untuk tombol delete dengan class 'delete-btn'
    document.querySelectorAll('.delete-form').forEach(function (deleteForm) {
        deleteForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var formId = this.getAttribute('data-id');

            Swal.fire({
                title: 'Apakah anda yakin ingin menolak ini?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Batalkan!',
                confirmButtonText: 'Lanjutkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit form delete dengan ID yang sesuai
                    document.getElementById('delete-form-' + formId).submit();
                }
            });
        });
    });

    // Tambahkan event listener untuk tombol accept dengan class 'btn-outline-success'
    document.querySelectorAll('.accept-form').forEach(function (acceptForm) {
        acceptForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var id = this.getAttribute('data-id');

            Swal.fire({
                title: 'Apakah anda yakin ingin menerima ini?',
                icon: 'question',
                showCancelButton: true,
                cancelButtonText: 'Batalkan!',
                confirmButtonText: 'Iya',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit form accept dengan ID yang sesuai
                    this.submit();
                }
            });
        });
    });


</script>
  </main><!-- End #main -->
@endsection
