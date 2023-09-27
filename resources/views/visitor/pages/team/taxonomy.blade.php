@extends('visitor.layout.user-app')
    @section('title')
    Taxonomy Team - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="the-plants ">
    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="fw-bolder font-satu">Taxonomy Team</h1>
            <p>The taxonomy team is responsible for the classification and naming of the traditional medicinal plants in the database. They use their expertise to identify each plant species and provide accurate scientific names. </p>
        </div>
    </div>
    </div>
</section>

<section id="the-plants ">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6">

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/team/team-jimmy-wanma.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">Jimmy F. Wanma</h5>
                        <p class="card-text">Classify and name traditional medicinal plants using their expertise in taxonomy. </p>
                        <p class="card-text"><small class="text-body-secondary">Taxonomist</small></p>
                        </div>
                    </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">            

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/team/team-default.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">Victor I. Simbiak</h5>
                        <p class="card-text">Classify and name traditional medicinal plants using their expertise in taxonomy. </p>
                        <p class="card-text"><small class="text-body-secondary">Web Developer</small></p>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@stop
