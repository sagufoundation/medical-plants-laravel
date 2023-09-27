@extends('visitor.layout.user-app')

    @section('title')
    @if($settings->site_title) {{ $settings->site_title }} @else  Site Title @endif
    @endsection

@section('content')

    <!-- BANNER 1 START -->
    @include('visitor.include.sections.banner-1')

    <!-- SEARCH START -->
    @include('visitor.include.sections.search')

    {{-- <!-- GOOGLE MAP START -->
        @include('visitor.includes.sections.google-map') --}}

    {{-- <section>
        <div class="container max-w-screen-xl mx-auto p-4">
            @include('visitor.includes.sections.graphs.total-plant')
        </div>
    </section> --}}
@stop

