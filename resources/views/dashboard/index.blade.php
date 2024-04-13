@extends('dashboard.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">
                    <li>{{ Str::title(Request::segment(1)) }}</li>
                    </li>
                </ol>
            </div>
            <h4 class="page-title">{{ Str::title(Request::segment(1)) }}</h4>
        </div>
    </div>
</div>
<!-- row end -->

@if (Auth::user()->hasRole('admin'))

<x-total-info />

<script src="{{ asset('assets/js/grafik.js')}}"></script>

@else

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h1>Welcome! {{ Auth::user()->name }}</h1>
                <span>
                    Your role: {{ implode("",Auth::user()->roles()->pluck('display_name')->toArray()) }}
                </span>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div> <!-- row end -->

@endif

@stop