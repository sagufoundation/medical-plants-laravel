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

@if (Auth::user()->hasRole('admin'))
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                {{-- <h1>Welcome! {{ Auth::user()->name }}</h1>
                <span>
                    Your role: {{ implode("",Auth::user()->roles()->pluck('display_name')->toArray()) }}
                </span> --}}

                <h2>Recent Login History</h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Login Time</th>
                            <th>IP Address</th>
                            <th>Device / Browser</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($histories as $index => $history)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $history->user->name ?? '-' }}</td>
                                <td>{{ $history->user->email ?? '-' }}</td>
                                <td>{{ \Carbon\Carbon::parse($history->logged_in_at)->format('d M Y, H:i') }}</td>
                                <td>{{ $history->ip_address }}</td>
                                <td>{{ $history->user_agent }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No login history available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>




            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div> <!-- row end -->
    
    
@endif

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