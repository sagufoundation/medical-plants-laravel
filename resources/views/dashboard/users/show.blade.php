
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

                        @if (empty($data->picture))
                        <img src="{{ asset('images/00.png') }}" alt="image user" class="border shadow w-100">
                        @else
                        <img src="{{ asset('images/users/' . $data->picture) }}" alt="image user" class="border shadow w-100">
                        @endif

                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Full Name </b>
                                    {!! $data->name ?? '' !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Email </b>
                                    {!! $data->email ?? '' !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Role</b>
                                    {{ implode("",$data->roles()->pluck('display_name')->toArray()) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 px-3 border-bottom">
                                    <b class="d-block mb-2">Status </b>
                                    {!! $data->status ?? '' !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- .row -->

                <div class="row">
                    <div class="col">
                        <div class="d-flex">
                            <a href="{{ route(Request::segment(1).'.'.Request::segment(2)) }}" class="btn btn-sm btn-light rounded-0 mx-1">
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
            <!-- .card-body END -->
        </div>
        <!-- .card END -->
    </div>
    <!-- .col END -->
</div>
<!-- .row END -->

@endsection
