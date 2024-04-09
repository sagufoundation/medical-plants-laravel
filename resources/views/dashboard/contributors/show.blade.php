
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
                        @if (empty($data->photo))
                        <img src="{{ asset('images/00.png') }}" alt="Image" class="border shadow w-100">
                        @else
                        <img src="{{ asset('images/team/'.$data->photo) }}" alt="Image" class="border shadow w-100">
                        @endif
                    </div>
                    <div class="col-lg-9">

                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Full Name </b>
                            {!! $data->full_name ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Email </b>
                            {!! $data->email ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Descriptions </b>
                            {!! $data->descriptions ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Address </b>
                            {{$data->address ?? ''}}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Status </b>
                            {{$data->status ?? ''}}
                        </div>



                        

                    </div>
                </div>

                <div class="row">
                    <div class="col">
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
