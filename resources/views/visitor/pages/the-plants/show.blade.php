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
                                <span class="d-block mb-2 text-secondary">Plant name in Local Language </span>
                                <div class="fs-5">
                                    {!! $data->local_name ?? '' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in Bahasa Indonesia </span>
                                <div class="fs-5">
                                    {!! $data->indonesian_name ?? '' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in local language </span>
                                <div class="fs-5">
                                    {!! $data->local_name ?? '' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Plant name in Latin </span>
                                <div class="fs-5">
                                    {!! $data->latin_name ?? '' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Taxonomists </span>
                                <div class="fs-5">
                                    {!! $data->taxonomists ?? '' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Treatments </span>
                                <div class="fs-5">
                                    {!! $data->treatments ?? '' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Traditional usage </span>
                                <div class="fs-5">
                                    {!! $data->traditional_usage ?? '' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Known Phytochemical Consituents </span>
                                <div class="fs-5">
                                    {!! $data->known_phytochemical_consituents ?? '' !!}
                                </div>
                            </div>
                            <div class="p-2 px-3 border-bottom">
                                <span class="d-block mb-2 text-secondary">Contributor </span>
                                <a href="{{ url('contributor') }}" class="text-decoration-none link-dark">
                                    
                                    {{-- @if($data->contributor->photo) 
                                    <img src="{{ $data->contributor->photo ?? '' }}" alt="Contributor photo" class="rounded-circle" style="width: 60px;">
                                    @else 
                                    <img src="{{ asset('images/team/team-default.png') }}" alt="Contributor photo" class="rounded-circle" style="width: 60px;">
                                    @endif --}}

                                    <span class="fs-5">
                                        
                                            {!! $data->contributor->full_name ?? '' !!}
                                        
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @if ($data->gallery_picture)
                            <img src="{{ asset('plants/'.$data->gallery_picture ?? '') }}" alt="Image" class="w-100">
                            @else
                            <img src="{{ asset('plants/image-gallery.jpg') }}" alt="Image" class="w-100">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
