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
                              <th scope="col" style="text-align: center;">Nama</th>
                              <th scope="col" style="text-align: center;">Pembayaran</th>
                              <th scope="col" style="text-align: center;">Keterangan</th>
                              <th scope="col" style="text-align: center;">Aksi</th>
                              
                          </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td style="text-align: center;">Mark nct</td>
                                  <td style="text-align: center;">Bank</td>
                                  <td style="text-align: center;">Mandiri</td>
                                  <td style="text-align: center;">
                                          <button style="margin-right: 10px;"
                                              class="btn btn-outline-warning edit-button"
                                              data-id=""
                                              data-metode=""><i
                                                  class="bi bi-eye"></i>
                                          </button>
                                              <button type="button" class="btn btn-outline-success"
                                                  onclick=""><i
                                                      class="fa-solid fa-check"></i></button>
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
  </main><!-- End #main -->
@endsection
