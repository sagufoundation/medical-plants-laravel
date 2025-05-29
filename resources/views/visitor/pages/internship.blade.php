@extends('visitor.layout.user-app')
    @section('title')
    Terms and Conditions - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="internship">
  <div class="container mt-5 mb-5">

    <div class="row mb-5">
      <div class="col-lg-6 mx-auto text-center">
        <h1 class="fw-bolder font-satu text-success">Internship With Us</h1>
        <p><strong>Internship for High School and University Students</strong><br>
          We welcome high school students (SMA) and undergraduate university students (S1) to join our internship program and contribute to preserving traditional medicinal knowledge in Papua.
        </p>
      </div>
    </div>

    <!-- Tambahan 4 Kolom Penjelasan -->
    <div class="row text-center mb-5">
      <div class="col-md-3 mb-4">
        <div class="border p-4 rounded h-100">
          <h5 class="text-success fw-bold">Taxonomy</h5>
          <p class="text-muted">Study of the classification and naming of medicinal plants based on scientific hierarchy (family, genus, species).</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="border p-4 rounded h-100">
          <h5 class="text-success fw-bold">Ethnobotany</h5>
          <p class="text-muted">Understanding how indigenous communities use plants for traditional medicine, rituals, and cultural practices.</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="border p-4 rounded h-100">
          <h5 class="text-success fw-bold">Phytochemistry</h5>
          <p class="text-muted">Analysis of natural chemical compounds in plants that have potential health benefits or medicinal properties.</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="border p-4 rounded h-100">
          <h5 class="text-success fw-bold">Web Developer</h5>
          <p class="text-muted">Support the digital documentation and visualization of plant data on our website and online platforms.</p>
        </div>
      </div>
    </div>

    <!-- Detail Internship -->
    <div class="row align-self-center">
      <div class="col-lg-8 mx-auto p-5 border" style="text-align: justify">

        <p class="h4 mt-4 text-success">What is this Internship About?</p>
        <p>This internship provides an opportunity for students to support our mission by <strong>collecting and documenting data</strong> on traditional medicinal plants used by communities across Papua. Interns can submit:</p>
        <ul>
          <li><strong>Primary data</strong>: Direct interviews or field findings from local communities.</li>
          <li><strong>Secondary data</strong>: Information sourced from books, journals, or trusted online sources, with clear citations.</li>
        </ul>
        <p>This project is part of our effort to <strong>digitize and preserve Papuan indigenous knowledge</strong> related to natural and plant-based healing practices.</p>

        <p class="h4 mt-4 text-success">Who Can Apply?</p>
        <ul>
          <li>Open to <strong>all study majors</strong></li>
          <li>Must be a <strong>high school (SMA) or undergraduate (S1) student</strong></li>
          <li>Passionate about indigenous knowledge, health, biodiversity, or technology</li>
        </ul>

        <p class="h4 mt-4 text-success">Internship Duration</p>
        <p>- Maximum <strong>3 months</strong>, or<br>
          - Completion upon submission of <strong>data on 10 medicinal plants</strong></p>

        <p class="h4 mt-4 text-success">What Will You Get?</p>
        <ul>
          <li>A chance to contribute to an impactful and community-based digital project</li>
          <li>Experience in data collection, research, and cultural preservation</li>
          <li><strong>Official internship certificate</strong> upon completion</li>
        </ul>

        <p class="h4 mt-4 text-success">How to Apply?</p>
        <p>Please fill out the form below to apply:<br>
          <a href="#" target="_blank">[Google Form Link]</a>
        </p>

        <p class="h4 mt-4 text-success">Notes for Applicants:</p>
        <ul>
          <li>You can work remotely, from your own region in Papua.</li>
          <li>If you need guidance, our team is ready to support you online.</li>
          <li>Data submitted must be original, respectful to cultural values, and clearly cited.</li>
        </ul>

        <!-- Tombol Apply Now -->
        <div class="text-center mt-5">
          <a href="#registrationForm" class="btn btn-success btn-lg px-4">Apply Now</a>
        </div>

      </div>
    </div>

    <!-- Optional: Section Form Registrasi -->
    <!-- Bisa pakai form HTML atau sematkan Google Form -->
    <!-- <div id="registrationForm" class="row mt-5">
      <div class="col-lg-8 mx-auto">
        <iframe src="https://docs.google.com/forms/your-form-link/viewform?embedded=true" width="100%" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
      </div>
    </div> -->

  </div>
</section>


@stop
