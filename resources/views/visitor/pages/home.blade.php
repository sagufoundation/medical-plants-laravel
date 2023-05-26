@extends('visitor.layouts.user-app')

    @section('title')
    @if($pengaturan->site_title) {{ $pengaturan->site_title }} @else  Site Title @endif 
    @endsection

@section('content')

    <!-- BANNER 1 START -->
    @include('visitor.includes.sections.banner-1')

    <!-- SEARCH START -->
    @include('visitor.includes.sections.search')
        
    <!-- GOOGLE MAP START -->
    @include('visitor.includes.sections.google-map')

@stop

