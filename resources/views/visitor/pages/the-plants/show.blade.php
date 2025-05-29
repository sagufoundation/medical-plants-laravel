@extends('visitor.layout.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

    <section id="the-plants ">
        <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h1 class="fw-bolder font-satu text-success"> {!! $data->local_name ?? '' !!}</h1>
                <p>{!! $data->latin_name ?? '' !!}</p>
            </div>
        </div>
        </div>
    </section>

    <section id="" class="mb-5">
        <div class="container mt-5">
            <div class="row justify-items-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in Latin </span>
                                <div class="fs-6">
                                    {!! $data->latin_name ?? '<span class="text-muted">Not yet provided</span>' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in Bahasa Indonesia </span>
                                <div class="fs-6">
                                    {!! $data->indonesian_name ?? '<span class="text-muted">Not yet provided</span>' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in English </span>
                                <div class="fs-6">
                                    {!! $data->english_name ?? '<span class="text-muted">Not yet provided</span>' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in local language </span>
                                <div class="fs-6">
                                    {!! $data->local_name ?? '<span class="text-muted">Not yet provided</span>' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Taxonomists </span>
                                <div class="fs-6">
                                    {!! $data->taxonomists ?? '<span class="text-muted">Not yet provided</span>' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Treatments </span>
                                <div class="fs-6">
                                    {!! $data->treatments ?? '<span class="text-muted">Not yet provided</span>' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Traditional usage </span>
                                <div class="fs-6">
                                    {!! $data->traditional_usage ?? '<span class="text-muted">Not yet provided</span>' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Known Phytochemical Consituents </span>
                                <div class="fs-6">
                                    {!! $data->known_phytochemical_consituents ?? '<span class="text-muted">Not yet provided</span>' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Contributor </span>
                                <a href="{{ url('contributor', $data->contributor->slug ?? '') }}" class="text-decoration-none link-dark">
                                    <span class="fs-6">
                                        <i class="fa-solid fa-user"></i>  {!! $data->contributor->full_name ?? '<span class="text-muted">Not yet provided</span>' !!}
                                    </span>
                                </a>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Regency / Region </span>
                                <a href="{{ url('plants/regency', $data->regency->slug ?? '') }}" class="text-decoration-none link-dark">

                                    <span class="fs-6">
                                        <i class="fa-solid fa-map-marker"></i>  {!! $data->regency->name ?? '<span class="text-muted">Not yet provided</span>' !!}
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">

                            @if ($data->image_cover)
                            <div class="row">
                                <div class="col-lg-12 mx-auto mb-3">
                                    <img src="{{ asset('images/plants/'. $data->id .'/'. $data->image_cover ?? '') }}" alt="Image" class="w-100">
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-lg-12 mx-auto mb-3">
                                    <img src="{{ asset('images/plants/image-gallery.jpg') }}" alt="Image" class="card-img-top">
                                </div>
                            </div>

                            @endif

                            <div class="row">

                                @if ($data->image_daun)
                                <div class="col-lg-4 mb-3 text-center">
                                    <img src="{{ asset('images/plants/'. $data->id .'/'. $data->image_daun ?? '') }}" alt="Image" class="w-100">
                                    <span class="d-block mb-2 text-secondary">Leaf (Daun)</span>
                                </div>
                                @endif

                                @if ($data->image_buah)
                                <div class="col-lg-4 mb-3 text-center">
                                    <img src="{{ asset('images/plants/'. $data->id .'/'. $data->image_buah ?? '') }}" alt="Image" class="w-100">
                                    <span class="d-block mb-2 text-secondary">Fruit (Buah)</span>
                                </div>
                                @endif

                                @if ($data->image_pohon)
                                <div class="col-lg-4 mb-3 text-center">
                                    <img src="{{ asset('images/plants/'. $data->id .'/'. $data->image_pohon ?? '') }}" alt="Image" class="w-100">
                                    <span class="d-block mb-2 text-secondary">Tree (Pohon)</span>
                                </div>
                                @endif

                                @if ($data->image_bunga)
                                <div class="col-lg-4 mb-3 text-center">
                                    <img src="{{ asset('images/plants/'. $data->id .'/'. $data->image_bunga ?? '') }}" alt="Image" class="w-100">
                                    <span class="d-block mb-2 text-secondary">Flower (Bunga)</span>
                                </div>
                                @endif

                                @if ($data->image_batang)
                                <div class="col-lg-4 mb-3 text-center">
                                    <img src="{{ asset('images/plants/'. $data->id .'/'. $data->image_batang ?? '') }}" alt="Image" class="w-100">
                                    <span class="d-block mb-2 text-secondary">Stem (Batang)</span>
                                </div>
                                @endif

                                @if ($data->image_keseluruhan)
                                <div class="col-lg-4 mb-3 text-center">
                                    <img src="{{ asset('images/plants/'. $data->id .'/'. $data->image_keseluruhan ?? '') }}" alt="Image" class="w-100">
                                    <span class="d-block mb-2 text-secondary">Shole (Keseluruhan)</span>
                                </div>
                                @endif

                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
