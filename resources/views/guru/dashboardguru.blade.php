@extends('layouts.layoutGuru')
@section('content')

<style>

    .info-card {
        transition: transform 0.3s ease-in-out;
    }

    .card.info-card:hover {
        transform: translateY(-10px); /* Adjust the distance on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Optional: Add a stronger box shadow on hover */
    }

</style>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="row">

          <!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-2 col-md-4">

              <div class="card info-card revenue-card " style="min-height: 90%">
                <div class="card-body">
                  <h5 class="card-title" style="padding: 10px">Jumlah Materi</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-3">
                      <i class="bi bi-journal-richtext"></i>
                    </div>
                    <div class="ps-3">
                  <h6> {{ $jumlahmateri }}</h6>

                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Revenue Card -->

            <div class="col-xxl-3 col-md-4">

              <div class="card info-card revenue-card " style="min-height: 90%">
                <div class="card-body" style="padding: 10px">
                  <h5 class="card-title">Jumlah Siswa</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-3">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahtransaksi }}</h6>

                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Customers Card -->
            <div class="col-xxl-2 col-md-4">

              <div class="card info-card customers-card " style="min-height: 90%">
                <div class="card-body" style="padding: 10px">
                  <h5 class="card-title">Jumlah Transaksi </h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-3">
                      <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahtransaksi }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Customers Card -->

            <div class="col-xxl-2 col-md-12" >


              <div class="card info-card customers-card" style="min-height: 90%">



                <div class="card-body" style="padding: 10px">
                  <h5 class="card-title">Saldo <span>| Bulan ini</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-3">
                        <i class="fa-solid fa-money-bill-trend-up"></i>
                    </div>
                    <div class="ps-3">
                        <h6>Rp. {{ number_format($pendapatan) }}</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div>

          </div>

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Pendapatan masuk</h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.44.2/apexcharts.min.js"></script>
                  <script>
                    var chartData = <?php echo json_encode($chartData); ?>;
                    console.log(chartData);

                    if (jQuery('#reportsChart').length) {
                      const options = {
                        series: [{
                          name: 'jumlah pendapatan',
                          type: 'area',
                          curve: 'smooth',
                          data: chartData.map(data => parseInt(data["{{ Auth()->user()->id }}"]))
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        // colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          categories: chartData.map(data => data.month),
                          labels: {
                            minHeight: 20,
                            maxHeight: 20,
                          }
                        },
                        yaxis: {
                          labels: {
                            minWidth: 20,
                            maxWidth: 20,
                          }
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          }
                        }
                      };

                      new ApexCharts(document.querySelector("#reportsChart"), options).render();
                    }
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div>

            <!-- Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
      <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  @endsection
