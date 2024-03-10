@extends('visitor.layout.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="">
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="fw-bolder font-satu text-success">Connect With Us</h1>
            <p> We welcome contributions from local community members as well as experts in the fields of phytochemistry, ethnobotany, and taxonomy.       </p>
        </div>
      </div>
</section>

<section id="">
    <div class="container mt-5 mb-5">
      <div class="row">
        {{-- <div class="col-lg-6">
            <h2 class="fw-bolder font-satu text-success">Send us message</h2>
            
            <form action="">

              <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control form-control-lg" placeholder="Your full name">
              </div>
              <!-- input group END -->

              <div class="mb-3">
                <label for="email_address" class="form-label">Email Address</label>
                <input type="text" name="email_address" class="form-control form-control-lg" placeholder="Your email address">
              </div>
              <!-- input group END -->

              <div class="mb-3">
                <label for="messages" class="form-label">Message</label>
                <textarea id="messages" name="messages" rows="5" class="form-control form-control-lg" placeholder="What you want to say to us?"></textarea>
              </div>
              <!-- input group END -->

            </form>

        </div> --}}
        <div class="col-lg-6 mx-auto">
            <p style="text-align: justify">To connect with us and contribute to the Database of Traditional Medicinal Plants in Papua, please visit our website and fill out the contact form. Our team will review your message and provide guidance on how to submit your information. We welcome contributions from local community members as well as experts in the fields of phytochemistry, ethnobotany, and taxonomy. Thank you for your interest in our project! </p>

            <div class="mb-3">
              <a href="mailto:trumbewas@gmail.com" class="btn btn-light">
                <i class="fa-solid fa-envelope me-2"></i>trumbewas@gmail.com
              </a>
            </div>

            <div class="mb-3">
              <a href="call:trumbewas@gmail.com" class="btn btn-light">
                <i class="fa-solid fa-phone me-2"></i>+62 821 991 66540
              </a>
              or
              <a href="https://wa.link/jqof4f" target="_blank" class="btn btn-success">Chat via Whatsapp</a>
            </div>



        </div>
      </div>
</section>

@stop
