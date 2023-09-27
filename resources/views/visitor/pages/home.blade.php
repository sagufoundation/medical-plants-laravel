@extends('visitor.layout.user-app')

    @section('title')
    @if($settings->site_title) {{ $settings->site_title }} @else  Site Title @endif
    @endsection

@section('content')

    <!-- BANNER 1 START -->
    @include('visitor.include.sections.banner-1')

    <!-- SEARCH START -->
    <div class="pb-5">
        @include('visitor.include.sections.search')
    </div>
@stop

