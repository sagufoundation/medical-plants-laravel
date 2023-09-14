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

    @if (Auth::user()->hasRole('administrator'))
        
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3"> Welcome to the Dashboard! </h4>
                    <p>Your control center for all things travel. From tour packages to destinations, adventures to events, visitor messages to user management, it's all here.</p>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- row end -->
    
    <script src="{{ asset('assets/js/grafik.js')}}"></script>

    @else
        <h1>Welcome! {{ Auth::user()->name }}</h1>
    @endif

  @stop
