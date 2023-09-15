
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-3">

                        @if (empty($data->cover_picture))
                        <img src="{{ asset('images/00.png') }}" alt="Image" class="border shadow w-100">
                        @else
                        <img src="{{ asset($data->cover_picture) }}" alt="Image" class="border shadow w-100">
                        @endif
                        <div class="mt-3">
                            @if (empty($data->gallery_picture))
                            <img src="{{ asset('images/00.png') }}" alt="Image" class="border shadow w-100">
                            @else
                            <img src="{{ asset($data->gallery_picture) }}" alt="Image" class="border shadow w-50">
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Local Name </b>
                                    {!! $data->local_name ?? '' !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Indonesian Name </b>
                                    {!! $data->indonesian_name ?? '' !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Latin Name </b>
                                    {!! $data->latin_name ?? '' !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Taxonomists </b>
                                    {!! $data->taxonomists ?? '' !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Treatments </b>
                                    {!! $data->treatments ?? '' !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Traditional Usage </b>
                                    {!! $data->traditional_usage ?? '' !!}
                                </div>
                            </div>
                        </div>

                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Known Phytochemical Consituents </b>
                            {!! $data->known_phytochemical_consituents ?? '' !!}
                        </div>

                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Status </b>
                            {!! $data->status ?? '' !!}
                        </div>

                        <div class="p-2 px-3">

                            <div class="d-flex">
                                <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'.show', $data->id) }}" class="btn btn-sm btn-dark rounded-0 mx-1" target="_blank">
                                    <i class="fa-solid fa-eye"></i> Preview
                                </a>
                                <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'', $data->id) }}" class="btn btn-sm btn-light rounded-0 mx-1">
                                    <i class="fa-solid fa-reply"></i>
                                </a>
                                <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'.edit', $data->id) }}" class="btn btn-sm btn-light rounded-0 mx-1">
                                    <i class="fa-solid fa-edit"></i>
                                </a>

                                <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-light rounded-0 mx-1">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- .card-body END -->
        </div>
        <!-- .card END -->
    </div>
    <!-- .col END -->
</div>
<!-- .row END -->

@endsection
