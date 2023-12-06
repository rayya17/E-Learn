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
                <div class="col-lg-12">
                    <div class="row">
                        <table>
                            <thead style="background-color: #4FA987;  " >
                                <tr>
                                    <th scope="col" style="text-align: center; border-top-left-radius:10px;">Metode Pembayaran</th>
                                    <th scope="col" style="text-align: center;">Tujuan</th>
                                    <th scope="col" style="text-align: center;">Keterangan</th>
                                    <th scope="col" style="text-align: center; border-top-right-radius:10px;">Aksi</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">Bank</td>
                                        <td style="text-align: center;">Mandiri</td>
                                        <td style="text-align: center;">123456789567</td>
                                        <td style="text-align: center;">
                                                <button style="margin-right: 10px;"
                                                    class="btn btn-outline-warning edit-button"
                                                    data-id=""
                                                    data-metode=""><i
                                                        class="bi bi-pencil-square"></i>
                                                </button>
                                                    <button type="button" class="btn btn-outline-danger delete-btn"
                                                        id="delete-button"
                                                        onclick=""><i
                                                            class="bi bi-trash-fill"></i></button>

                                            </td>
                                    </tr>
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
    <form>
    <div class="modal fade" id="modalTarikSaldo" tabindex="-1" aria-labelledby="modalTarikSaldoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTarikSaldoLabel">Tarik Saldo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                          @if ($errors->has('keterangan_bank'))
                            <span class="text-tujuan">{{ $errors->first('tujuan') }}</span>
                          @endif
                        </div>
                        <div class="mb-3">
                          <label for="kelas" class="form-label fw-bold">Nomor Rekening</label>
                          <input type="number" name="keterangan_pengajuan" id="keterangan" class="form-control"
                            value="{{ old('keterangan') }}">
                          @if ($errors->has('keterangan'))
                            <span class="text-danger">{{ $errors->first('keterangan') }}</span>
                          @endif
                        </div>
                      </div>
                        {{-- </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
</main><!-- End #main -->
@endsection
