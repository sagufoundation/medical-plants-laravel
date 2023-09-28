@extends('visitor.layout.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="the-plants ">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h1 class="fw-bolder font-satu text-success">Our Sponsors</h1>
                <p>Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <img src="{{ asset('images/illustrations/contributor1.png') }}" alt="Illustration image" class="w-75">
            </div>
        </div>

    </div>
</section>

@stop
