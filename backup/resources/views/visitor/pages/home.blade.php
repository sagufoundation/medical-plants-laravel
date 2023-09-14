@extends('visitor.layouts.user-app')

    @section('title')
    @if($pengaturan->site_title) {{ $pengaturan->site_title }} @else  Site Title @endif 
    @endsection

@section('content')

    <!-- BANNER 1 START -->
    @include('visitor.includes.sections.banner-1')

    <!-- SEARCH START -->    
    <section class="py-9">
        <div class="container max-w-screen-xl mx-auto p-4">
            @include('visitor.includes.sections.search')
        </div>
    </section>
    
    {{-- <!-- GOOGLE MAP START -->
        @include('visitor.includes.sections.google-map') --}}
        
    {{-- <section>
        <div class="container max-w-screen-xl mx-auto p-4">
            @include('visitor.includes.sections.graphs.total-plant')
        </div>
    </section> --}}
@stop

