@extends('dashboard.layout.app')
@section('content')
@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- row start -->
                <div class="row">
                    
                    <!-- .col start -->
                    <div class="col-lg-8">
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Full Name </b> {!! $data->name ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Email </b> {!! $data->email ?? '' !!}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Role</b> {{ implode('', $data->roles->pluck('display_name')->toArray()) }}
                        </div>
                        <div class="p-2 px-3 border-bottom">
                            <b class="d-block mb-2">Status </b> {!! $data->status ?? '' !!}
                        </div>

                    </div>
                    <!-- .col end -->

                    <!-- .col start -->
                    <div class="col-lg-4">

                        @if (empty($data->picture))
                        <img src="{{ asset('images/00.png') }}" alt="image user" class="border shadow w-100">
                        @else
                        <img src="{{ asset('images/users/' . $data->picture) }}" alt="image user" class="border shadow w-100">
                        @endif

                    </div>
                    <!-- .col end -->
                </div> 
                <!-- .row end -->

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
