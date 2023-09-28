@extends('visitor.layout.user-app')
    @section('title')
    Research - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section id="the-plants ">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h1 class="fw-bolder font-satu text-success">Research</h1>
                <p>This part of the database provides researchers with access to information on the chemical properties of the plants, their potential therapeutic effects, and their traditional use. Researchers can also contribute to the database by sharing their own research findings and publications on traditional medicinal plants from Papua.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mx-auto text-center p-5">
                <img src="{{ asset('images/illustrations/research.png') }}" alt="Illustration image" class="w-50">
            </div>
        </div>

    </div>
</section>

@stop
