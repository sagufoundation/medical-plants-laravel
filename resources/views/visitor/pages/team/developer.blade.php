@extends('visitor.layout.user-app')
    @section('title')
    Developer Team - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="the-plants ">
    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="fw-bolder font-satu text-success">Developer Team</h1>
            <p>This team is responsible for designing, building, and maintaining the technical infrastructure of the database. They ensure that the website is functional, user-friendly, and secure for both contributors and users. </p>
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
                        <img src="{{ asset('images/team/team-janzen-faidiban.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">Janzen Faidiban</h5>
                        <p class="card-text">Design, build, and maintain the technical infrastructure of the database.</p>
                        <p class="card-text"><small class="text-body-secondary">Web Developer</small></p>
                        </div>
                    </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">            

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/team/team-samuel-bosawer.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">Samuel Bosawer</h5>
                        <p class="card-text">Samuel is a web developer who contribute in developing GIS system and backend of the app. </p>
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
