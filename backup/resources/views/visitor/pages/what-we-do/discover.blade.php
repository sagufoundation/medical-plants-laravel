@extends('visitor.layouts.user-app')
    @section('title')
    Discover - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<!-- heading start -->
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl lg:pt-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-600">Discover</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">This part of the database allows users to explore the traditional medicinal plants of Papua based on their scientific names, common names, or medicinal uses. Users can also browse through images of the plants and learn about their cultural significance and traditional use.</p>
        </div>
    </div>
</section>
<!-- heading end -->

<section class="bg-white dark:bg-gray-900 pb-16">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid sm:py-16 lg:px-6">
        <img class="rounded-lg dark:hidden max-w-screen-sm mx-auto" src="/assets/img/illustrations/4.png" alt="Illustration image">
        <img class="rounded-lg hidden dark:block max-w-screen-sm mx-auto" src="/assets/img/illustrations/4-light.png" alt="Illustration image">
    </div>
</section>

@stop
