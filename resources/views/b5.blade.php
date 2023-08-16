<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="">

    {{-- HEADER START --}}
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid d-flex justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/188/188333.png" class="ml-3" width="30" alt="Flowbite Logo" />
                     <span class="text-success fw-bold">Traditional Medicinal Plants in Papua</span>
                </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link fw-bold active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">The Plants</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">How To Contribute</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">Our Sponsors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">Connetc With Us</a>
                  </li>

                </div>

            </div>
          </nav>

    </header>
    {{-- HEADER END --}}

    {{-- BANNER START --}}
   <section id="banner" class="mt-5 mb-5">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="text-success">
                        <h1 class="fw-bolder font-satu">Traditional Medicinal </h1>
                        <h1 class="fw-bolder font-satu" >Plants in Papua</h1>
                    </div>
                    <div>
                        <p class="text-muted " style="text-align: justify">
                            Welcome to the Database of Traditional Medicinal Plants in Papua, a comprehensive and easily accessible resource for researchers, healthcare practitioners, and anyone interested in traditional medicine, aiming to promote the importance of preserving traditional medicinal knowledge and exploring it for global medicinal research.
                        </p>
                        <a href="" class="btn btn-success">Explore the plants <i class="fa-solid fa-arrow-right ms-2"></i>          </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://cdn-icons-png.flaticon.com/512/188/188333.png" class="img-fluid"  alt="Flowbite Logo" />

                </div>
            </div>
        </div>
   </section>
    {{-- BANNER END --}}

    {{-- SEARCH START --}}
    <section id="serarch mt-5">
      <div class="container">
        <div class="row">

          <div class="col-10">
            <div class="mb-3">
              <input type="text"
                class="form-control p-3 rounded" name="" id=""  placeholder="Type your keyword in here ..">
            </div>
          </div>

          <div class="col-2">
            <button class="btn btn-success  p-3"> Search <i class="fa-solid fa-search mr-2"></i></button>
          </div>
        </div>
      </div>
    </section>
    {{-- SEARCH END --}}



    {{-- MAP START --}}
    <section id="maps mt-5 mb-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8142423.310409168!2d128.17550027568183!3d-4.805631541209274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x683b2c04aaff9273%3A0xeba94e9c5eefe673!2sPapua!5e0!3m2!1sen!2sid!4v1692000680147!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    {{-- MAP END --}}




    {{-- FOOTER START --}}
    <footer class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 mt-4">
            <a class="text-decoration-none" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/188/188333.png" class="ml-3" width="30" alt="Flowbite Logo" />
                     <span class="text-success fw-bold ">Traditional Medicinal Plants in Papua</span>
                </a>
                <p class="p-3" style="text-align: justify">
                    Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.
                </p>
                <a href="" class="btn btn-outline-success mt-0 p-3">Connect With us <i class="fa-solid fa-arrow-right ms-2"></i>  </a>

                <div class="row mt-3">
                    <div class="col-1">
                        <a href="#" class="text-decoration-none text-secondary">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                    <div class="col-1">
                        <a href="#" class="text-decoration-none text-secondary">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <div class="col-1">
                        <a href="#" class="text-decoration-none text-secondary">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                    <div class="col-1">
                        <a href="#" class="text-decoration-none text-secondary">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                    <div class="col-1">
                        <a href="#" class="text-decoration-none text-secondary">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
          </div>
          <div class="col-xl-2 mt-4">
                <p class="fw-bolder">OUR TEAM</p>
                <p> <a href="" class="text-decoration-none text-secondary">Developer Team</a> </p>
                <p> <a href="" class="text-decoration-none text-secondary mb-3">Taxonomy Team</a> </p>
                <p>  <a href="" class="text-decoration-none text-secondary mb-3">Ethnobotany Team</a> </p>
                <p> <a href="" class="text-decoration-none text-secondary mb-3">Phytochemistry Team</a> </p>
          </div>
          <div class="col-xl-2 mt-4">
            <p class="fw-bolder">WHAT WE DO</p>
            <p> <a href="" class="text-decoration-none text-secondary">Discover</a> </p>
            <p> <a href="" class="text-decoration-none text-secondary mb-3">Research</a> </p>
          </div>
          <div class="col-xl-2 mt-4">
                <p class="fw-bolder">PRIVACY & POLICY</p>
                <p> <a href="" class="text-decoration-none text-secondary">Privacy Policy</a> </p>
                <p> <a href="" class="text-decoration-none text-secondary mb-3">Terms & Conditions</a> </p>
                <hr class="border border-black border-2 opacity-75">
                <div id="google_translate_element"></div>
          </div>
        </div>
        <div class="row text-secondary mt-4 pb-5 d-flex justify-content-between">
            <div class="col-md-10">
                © 2023 <a class="text-decoration-none text-secondary "  href="">Traditional Medicinal Plants in Papua™. All Rights Reserved.</a>
            </div>
            <div class="col-md-1">
                <a class="text-decoration-none text-secondary" href="{{route('login')}}"> <i class="fa-solid fa-sign-in"></i> Login</a>
            </div>
        </div>
      </div>
    </footer>
    {{-- FOOTER END --}}
=======
                    <a class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">The Plants</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">How To Contribute</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Our Sponsors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Connetc With Us</a>
                  </li>







                </div>
                <div class="d-md-flex justify-content-md-end">
                    <a class="text-dark"><i class="fa-solid fa-moon"></i></a>
                </div>
            </div>
          </nav>


    </header>
    {{-- HEADER END --}}


>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<<<<<<< HEAD
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
=======
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
</body>
</html>
