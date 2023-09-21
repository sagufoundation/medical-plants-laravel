@extends('visitor.layout.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

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
                            <b class="d-block mb-2 text-secondary">Plant name in Bahasa Indonesia </b>
                            {!! $data->indonesian_name ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2 text-secondary">Plant name in local language </b>
                            {!! $data->local_name ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2 text-secondary">Plant name in Latin </b>
                            {!! $data->latin_name ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2 text-secondary">Taxonomists </b>
                            {!! $data->taxonomists ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2 text-secondary">Treatments </b>
                            {!! $data->treatments ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2 text-secondary">Traditional usage </b>
                            {!! $data->traditional_usage ?? '' !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-xl-6  align-self-center" >
                            @if (!$data->cover_picture)
                            <img src="https://medicinalplantspapua.org/storage/images/plants/plant-kurudu-inasi-koi.jpg" alt="Image" class="img-fluid thumbnail">
                            @else
                            <img src="{{ asset($data->cover_picture) }}" alt="Image" class="card-img-top">
                            @endif
                            {{-- <img src="/assets/img/illustrations/1.png" class="img-fluid " alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
