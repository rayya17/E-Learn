@extends('layouts.layoutGuru')

@section('content')

  <main id="main" class="main">
      <!-- End Page Title -->
        <section class="section dashboard">
            <button type="button" class="btn btn-outline-success btn-tarik-saldo" data-bs-toggle="modal" data-bs-target="#modalTarikSaldo" style="border-radius: 10px">Tarik Saldo</button>
            <div class="row">
                    <div class="col-md-12 col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body"> 
                <!-- Left side columns -->
                <h6>Saldo Anda : Rp {{ number_format($pendapatan) }}</h6>
                <div class="col-lg-12">
                    <div class="row">
                        <table>
                            <thead style="background-color: #4FA987;  " >
                                <tr>
                                    <th scope="col" style="text-align: center; border-top-left-radius:10px;">Metode Pembayaran</th>
                                    <th scope="col" style="text-align: center;">keterangan</th>
                                    <th scope="col" style="text-align: center;">tujuan</th>
                                    <th scope="col" style="text-align: center;">status</th>
                                    <th scope="col" style=" border-top-right-radius:10px;">Aksi</th>
                                    
                                </tr>
                                </thead>
                                <tbody style="mt-4">
                                  @foreach ($mengajukan as $item)                        
                                  <tr>
                                    <td style="text-align: center; ">{{$item->metodepembayaran  }}</td>
                                    <td style="text-align: center; ">{{ $item->keterangan_pengajuan }}</td>
                                    <td style="text-align: center; ">{{ $item->tujuan_pengajuan }}</td>
                                    <td style="text-align: center;">                                 
                                    <form id="mengajukanForm" action="{{ route('mengajukandana', $item->id) }}" method="post">
                                      @csrf
                                      @method('patch')
                                      <button type="submit" class="btn btn-warning" data-status="{{ $item->status }}">
                                          {{ $item->status === 'mengajukan' ? 'Ajukan' : 'Telah Diajukan' }}
                                      </button>
                                  </form> 
                                    </td>

                                    <td style="text-align: center;">
                                      <div class="d-flex gap-0" style="text-align: center;">
                                        {{-- edit --}}
                                        <button style="margin-right: 10px;" class="btn btn-outline-warning edit-button"
                                        data-bs-toggle="modal" data-bs-target="#modalEdit-{{ $item->id }}"><i class="bi bi-pencil-square"></i>
                                    </button>

                                    {{-- delete --}}
                                    <form id="delete-form-{{ $item->id }}" action="{{ route('Pembayaran.destroy', $item->id) }}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <button  type="button" class="btn btn-outline-danger delete-btn" onclick="confirmDelete('{{ $item->id }}')">
                                          <i class="bi bi-trash-fill"></i>
                                      </button>
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
    </section>

    <!-- Modal Tarik Saldo -->
    <form action="{{ route('Pembayaran.store') }}" method="post" enctype="multipart/form-data">
      @csrf
    <div class="modal fade" id="modalTarikSaldo" tabindex="-1" aria-labelledby="modalTarikSaldoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTarikSaldoLabel">Tarik Saldo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="guru_id" value="{{ $request->guru_id ?? '' }}">
                  {{-- <span>{{ $request->guru_id }}</span> --}}
                    <div class="mb-3">
                        <label for="kelas" class="form-label fw-bold">metode pembayaran</label>
                        <select name="metodepembayaran" id="selectMetode" class="form-control">
                          <option value="" class="dropdown-menu" disabled selected>Pilih Metode Pembayaran
                          </option>
                          <option value="bank" data-target="bankInput">Bank</option>
                        </select>
                      </div>
                      <div class="" value="bank" id="bankInput" style="display: none;">
                        <div class="mb-3">
                          <label for="kelas" class="form-label fw-bold">tujuan</label>
                          <input type="text" name="tujuan_pengajuan" id="tujuan-bank" class="form-control" value="{{ old('tujuan') }}">
                          @if ($errors->has('tujuan_pengajuan'))
                            <span class="text-tujuan">{{ $errors->first('tujuan_pengajuan') }}</span>
                          @endif
                        </div>
                        <div class="mb-3">
                          <label for="kelas" class="form-label fw-bold">Nomor Rekening</label>
                          <input type="number" name="keterangan_pengajuan" id="keterangan" class="form-control"
                            value="{{ old('keterangan_pengajuan') }}">
                          @if ($errors->has('keterangan_pengajuan'))
                            <span class="text-danger">{{ $errors->first('keterangan_pengajuan') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>                       
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
      </form>

      {{-- modal edit --}}
      @foreach ($mengajukan as $item)    
      <form action="{{ route('Pembayaran.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal fade" id="modalEdit-{{ $item->id }}" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTarikSaldoLabel">Edit Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="metodepembayaran" class="form-label fw-bold">metode pembayaran</label>
                        <input type="text" class="form-control" id="metodepembayaran"
                      name="metodepembayaran" value="{{ $item->metodepembayaran }}" readonly>
                    </div>

                        <div class="mb-3">
                          <label for="tujuan_pengajuan" class="form-label fw-bold">tujuan</label>
                          <input type="text" name="tujuan_pengajuan" id="tujuan_pengajuan" class="form-control" value="{{ $item->tujuan_pengajuan }}">
                        </div>

                         <div class="mb-3">
                          <label for="keterangan_pengajuan" class="form-label fw-bold">Keterangan</label>
                          <input type="text" name="keterangan_pengajuan" id="keterangan_pengajuan" class="form-control" value="{{ $item->keterangan_pengajuan }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endforeach
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          const selectMetode = document.getElementById('selectMetode');
          const bankInput = document.getElementById('bankInput');
  
          selectMetode.addEventListener('change', function() {
            if (selectMetode.value === 'bank') {
              bankInput.style.display = 'block';
            } else {
              bankInput.style.display = 'none';
            }
          });
        });
      </script>

      <!-- Include this script at the end of your HTML body or in your JavaScript file -->
<script>
  document.getElementById('mengajukanForm').addEventListener('submit', function (event) {
      // Prevent the default form submission
      event.preventDefault();

      // Update the button text or appearance
      var button = this.querySelector('button');
      button.textContent = 'Telah Diajukan';
      button.classList.remove('btn-warning');
      button.classList.add('btn-info');

      fetch(this.action, {
          method: 'POST',
          body: new FormData(this),
          headers: {
              'X-CSRF-Token': this.querySelector('input[name="_token"]').value,
              'X-HTTP-Method-Override': this.querySelector('input[name="_method"]').value,
          },
      })
          .then(response => response.json())
          .then(data => {
              // Handle the response if needed
              console.log(data);
          })
          .catch(error => {
              console.error('Error:', error);
          });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script untuk menampilkan SweetAlert -->
<script>
    function confirmDelete(PembayaranId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form when confirmed
                document.getElementById('delete-form-' + PembayaranId).submit();
            }
        });
    }
</script>

</main><!-- End #main -->
@endsection
