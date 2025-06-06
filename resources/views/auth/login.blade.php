<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Login - Medical Plants</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets-admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets-admin/css/style.css') }}" rel="stylesheet">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <img src="{{ asset('assets-admin/img/logo.png') }}" alt="">
                <a href="/" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block text-success">Traditional Medicinal Plants <br> in Papua</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 text-success">Login to Your Account</h5>
                    <p class="text-center small text-success">Enter your email & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}"  novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="youremail" class="form-label">Email Address</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control form-control-lg" id="youremail" required>
                        @error('email')
                        <span class="invalid-feedback d-flex" role="alert">
                            <p class=" ">{{ $message }}</p>
                        </span>
                        @enderror
                        <div class="invalid-feedback">Please enter your email.</div>

                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control form-control-lg" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="col-12">
                      <button class="btn btn-success btn-lg w-100" type="submit"><i class="fa-solid fa-sign-in me-2"></i> Login</button>
                    </div>
                    {{-- <div class="col-12">
                      <p class="small mb-0">Don't have account? <a class="text-success fw-bold" href="#">Create an account</a></p>
                    </div> --}}
                  </form>

                </div>
              </div>

              <div class="mt-5 mb-5">

              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets-admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets-admin/js/main.js') }}"></script>

</body>

</html>
