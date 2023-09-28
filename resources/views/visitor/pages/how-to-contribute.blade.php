@extends('visitor.layout.user-app')
    @section('title')
        How To Contribute- Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="">
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="fw-bolder font-satu text-success"> How To Contribute</h1>
            <p>We welcome everyone who want to be part of the project. We love to work and collaborate with local community and any experts
            </p>
        </div>
      </div>
</section>

<section id="">
    <div class="container mt-5 mb-5">
      <div class="row text-center">
        <div class="col-lg-6">
            <img src="{{ asset('images/illustrations/contributor1.png') }}" alt="Ilustration Image" class="w-25">
            <h2 class="fw-bolder font-satu text-success">For each individual or group of the local community in Papua </h2>
            <p style="text-align: justify">If you are a member of the local community in Papua and have knowledge of traditional medicinal plants used in your village to treat illnesses, we encourage you to share your insights with us. You can contribute to the database by providing detailed information on the plants, including their traditional names in your native language, traditional uses, and any other relevant details. Our team of taxonomists will provide the scientific names for the plants. To contribute, please contact us through the website and we will guide you through the process of submitting your information. </p>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('images/illustrations/contributor2.png') }}" alt="Ilustration Image" class="w-25">
            <h2 class="fw-bolder font-satu text-success">Phytochemist, taxonomist, or ethnobotanist </h2>
            <p style="text-align: justify">If you are a phytochemist, taxonomist, or ethnobotanist with expertise related to traditional medicinal plants from Papua, we welcome your contribution to the database. You can contribute by providing information on plants that have been or have not been published on the database, as well as any updates or corrections to existing plant profiles. To contribute, please contact us through the website and we will guide you through the process of submitting your information.</p>
        </div>
      </div>
</section>


@stop
