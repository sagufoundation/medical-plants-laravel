@extends('visitor.layout.user-app')
    @section('title')
    Phytochemistry Team - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="the-plants ">
    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="fw-bolder font-satu">Phytochemistry Team</h1>
            <p>This team analyses the chemical compounds present in the plants to understand their potential therapeutic effects, and also gathers information on previous studies conducted on the same species in Papua, as well as research conducted on the same species from other countries. By doing so, the phytochemistry team aims to provide a comprehensive understanding of each plant's medicinal properties. </p>
        </div>
    </div>
    </div>
</section>

<section id="the-plants ">
    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-lg-6">            

                <div class="card mb-3">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/team/team-tisha-rumbewas.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">Tisha Rumbewas</h5>
                        <p class="card-text">Analyze the chemical properties of the plants and gather information on previous studies to provide a comprehensive understanding of each plant's medicinal properties. </p>
                        <p class="card-text"><small class="text-body-secondary">Phytochemist</small></p>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@stop
