
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- .row start -->
                <div class="row">

                    <!-- .col start -->
                    <div class="col-lg-8">

                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Name </b> {!! $data->name ?? '' !!}
                        </div>

                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Coordinates </b> {!! $data->coordinates ?? '' !!}
                        </div>
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Description </b> {!! $data->description ?? '' !!}
                        </div>
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Status </b> {!! $data->status ?? '' !!}
                        </div>

                    </div>
                    <!-- .col end -->

                    <!-- .col start -->
                    <div class="col-lg-4">
                        @if (empty($data->image))
                        <img src="{{ asset('images/regencies/00.png') }}" alt="image regency" class="border shadow w-100">
                        @else
                        <img src="{{ asset('images/regencies/' . $data->image) }}" alt="image regency" class="border shadow w-100">
                        @endif
                    </div>
                    <!-- .col end -->
                </div>
                <!-- .row start -->

                <!-- row start -->
                <div class="row">
                    <!-- .col start -->
                    <div class="col d-flex">
                        <x-edit-button :id="$data->id" />                           
                        <x-delete-button :id="$data->id" />
                        <x-close-button/>
                    </div>
                    <!-- .col start -->
                </div>
                <!-- .row end -->

            </div>
            <!-- .card-body END -->
        </div>
        <!-- .card END -->
    </div>
    <!-- .col END -->
</div>
<!-- .row END -->

@endsection
