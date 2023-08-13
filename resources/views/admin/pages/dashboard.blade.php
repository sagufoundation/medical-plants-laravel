
@extends('admin.layouts.admin-app')
    @section('title')
    Admin The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Plants </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <div class="ps-3">
                      <h6>7</h6>
                      <span class="text-success small pt-1 fw-bold">3</span> <span class="text-muted small pt-2 ps-1">Publish</span>
                      <br>
                      <span class="text-success small pt-1 fw-bold">2</span> <span class="text-muted small pt-2 ps-1">Review</span>
                      <br>
                      <span class="text-success small pt-1 fw-bold">2</span> <span class="text-muted small pt-2 ps-1">Draft</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

             <!-- Sales Card -->
             <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">Contributors </h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                         <i class="bi bi-people-fill"> </i>
                      </div>
                      <div class="ps-3">
                        <h6>7</h6>
                        <span class="text-success small pt-1 fw-bold">3</span> <span class="text-muted small pt-2 ps-1">Publish</span>
                        <br>
                        <span class="text-success small pt-1 fw-bold">2</span> <span class="text-muted small pt-2 ps-1">Review</span>
                        <br>
                        <span class="text-success small pt-1 fw-bold">2</span> <span class="text-muted small pt-2 ps-1">Draft</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

@stop


