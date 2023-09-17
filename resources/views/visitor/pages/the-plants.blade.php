@extends('visitor.layout.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="the-plants ">
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-12 text-center">
            <h1 class="fw-bolder font-satu"> The Plants</h1>
            <p>Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.
            </p>
        </div>
      </div>
    </div>
  </section>
  <!-- SEARCH START -->

  @include('visitor.include.sections.search')

  <section>
    <div class="container py-5">
        <div class="row">

            <!-- col start -->
            <div class="col-lg-3">
                <div class="card">
                  <img src="https://medicinalplantspapua.org/storage/images/plants/plant-kurudu-inasi-koi.jpg" alt="Image" class="card-img-top">
                  <div class="card-body">
                    <h3>
                      <a href="#" class="fw-bold text-decoration-none link-success">Inasi Koi</a>
                    </h3>
                    <div class="my-3 d-flex gap-3">
                      <a href="{{ url('plants/province/papua') }}" class="text-decoration-none link-secondary">
                        <i class="fa-solid fa-map-marker"></i> Province
                      </a>
                      <a href="{{ url('plants/contributor/tisha-rumbewas') }}" class="text-decoration-none link-secondary">
                        <i class="fa-solid fa-user"></i> Tisha Rumbewas
                      </a>
                    </div>
                    {!! '<i>Scaevola Taccada</i> (Gaertn.) Roxb' !!}
                  </div>
                </div>
            </div>
            <!-- col end -->

        </div>
    </div>
</section>

@stop
