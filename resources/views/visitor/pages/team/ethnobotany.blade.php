@extends('visitor.layout.user-app')
    @section('title')
    Ethnobotany Team - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="the-plants ">
    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="fw-bolder font-satu text-success">Ethobotany Team</h1>
            <p>The ethnobotany team is responsible for collecting and analyzing information on the traditional uses of medicinal plants by the Indigenous Papuan communities. They work closely with local community members to document the cultural significance of each plant and its traditional use. </p>
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
                        <p class="card-text">Collect and analyze information on traditional uses of medicinal plants by Indigenous Papuan communities to document the cultural significance of each plant and its traditional use. </p>
                        <p class="card-text"><small class="text-body-secondary">Ethnobotanist</small></p>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



@stop
