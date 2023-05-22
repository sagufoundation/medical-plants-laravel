@extends('user.layouts.user-app')

    @section('title')
    @if($pengaturan->site_title) {{ $pengaturan->site_title }} @else  Site Title @endif 
    @endsection

@section('content')

    <!-- BANNER 1 START -->
    @include('user.includes.sections.banner-1')

    <!-- SEARCH START -->
    @include('user.includes.sections.search')
        
    <!-- GOOGLE MAP START -->
    @include('user.includes.sections.google-map')

@stop

