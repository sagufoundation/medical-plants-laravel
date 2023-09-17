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



@stop
