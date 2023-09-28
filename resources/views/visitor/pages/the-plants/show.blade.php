@extends('visitor.layout.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

    <section id="the-plants ">
        <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h1 class="fw-bolder font-satu text-success"> The Plants</h1>
                <p>Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.
                </p>
            </div>
        </div>
        </div>
    </section>

    <section id="" class="mb-8">
        <div class="container mt-5">
            <div class="row justify-items-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-2 px-3 border-bottom">
                                <h2><b>{!! $data->local_name ?? '' !!}</b> </h2>
                                <p class="text-secondary">
                                    {!! $data->latin_name !!}
                                </p>
                                <p>{{ $data->province->name ?? '' }}</p>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in Bahasa Indonesia </span>
                                {!! $data->indonesian_name ?? '' !!}
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in local language </span>
                                {!! $data->local_name ?? '' !!}
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in Latin </span>
                                {!! $data->latin_name ?? '' !!}
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Taxonomists </span>
                                {!! $data->taxonomists ?? '' !!}
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Treatments </span>
                                {!! $data->treatments ?? '' !!}
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Traditional usage </span>
                                {!! $data->traditional_usage ?? '' !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            @if (!$data->gallery_picture)
                                <img src="{{ asset('plants/sample/image-gallery.jpg') }}" alt="Image" class="w-100">
                                @else
                                <img src="{{ asset($data->gallery_picture) }}" alt="Image" class="w-100">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
