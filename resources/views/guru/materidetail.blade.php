@extends('layouts.layoutGuru')
@section('content')

<!-- Breadcrumbs Section -->
 <style>
        .edit-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #33a797; /* Button background color */
            border: none;
            color: #fff; /* Button text color */
            padding: 18px;
            border-radius: 50%; /* Make it round */
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Optional: Add a subtle shadow */
        }
.edit-icon {
            width: 20px; /* Adjust the icon size as needed */
            height: 20px;
            fill: #fff; /* Icon color */
            margin-right: 5px; /* Add some space between icon and text */
        }
    </style>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Judul Tugas <span class="text-danger"></span></h2>
      <ol></ol>
    </div>
  </div>
</section><!-- End Breadcrumbs -->

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="align-items-center">
            <img src="" class="card-img-top" alt="" width="400" height="400">
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Deskripsi</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                hehe
              </li>
            </ul>
             <div class="card-footer">
 
</div>
 <div style="background-color: #e0e0e0; width: 150px; height: 80px; float: left;">
    <div class="card-body">
        <h5>20.000</h5>
        <p class="card-text"></p>
    </div>
</div>



          </div>
        </div>
      </div>
    </div>
    <hr style="border-top: 2px solid #000;">

    <!-- Navigation Tabs -->
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active text-left" id="home-tab" data-toggle="tab" data-target="#mapel" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" style="font-size: 18px;">Materi</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link text-left" id="profile-tab" data-toggle="tab" data-target="#tab2" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" style="font-size: 18px;">Tugas</button>
  </li>
  
</ul>

    <!-- Tab Content -->
    <div class="tab-content">
      <!-- Detail Tab -->
      <div class="tab-pane fade show active" id="mapel" role="tabpanel" aria-labelledby="home-tab">
        <div class="semua text-center">
          <h2 class="mb-4"> Materi PDF</h2>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">PDF Document</h5>
              <!-- Add your PDF viewer or embed code here -->
              <embed src="your-pdf-file.pdf" type="" width="100%" height="600px" />
            </div>
          </div>
        </div>
      </div>

      <!-- Ulasan Tab -->
      <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
        <!-- Isi konten ulasan di sini -->
        <div class="text-center">
          <h2 class="mb-4">Tugas</h2>
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
                                <th scope="col" style="text-align: center;">No</th>
                                <th scope="col" style="text-align: center;">Tugas</th>
                                <th scope="col" style="text-align: center;">Deskripsi</th>
                                <th scope="col" style="text-align: center;">Tanggal Mulai</th>
                                <th scope="col" style="text-align: center;">Tanggal Tenggat</th>                              
                          </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td style="text-align: center;">Mark nct</td>
                                  <td style="text-align: center;">Bank</td>
                                  <td style="text-align: center;">Mandiri</td>
                                <td style="text-align: center;">Mandiri</td>
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

        </div>
      </div>
    </div>
  </div>
   <!-- Edit Button -->
    <button class="edit-button">
        <div class="icon">
          <i class="bi bi-pencil-fill"></i>
          <div class="label">
          </div>
        </div>
    
    </button>
</section><!-- End Portfolio Details Section -->

@endsection
