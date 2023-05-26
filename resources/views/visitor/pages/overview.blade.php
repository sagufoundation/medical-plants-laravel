@extends('visitor.layouts.user-app')
    @section('title')
    Overview - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<!-- heading start -->
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl lg:pt-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-600">Overview</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Welcome to the Database of Traditional Medicinal Plants in Papua, a comprehensive and easily accessible resource for researchers, healthcare practitioners, and anyone interested in traditional medicine, aiming to promote the importance of preserving traditional medicinal knowledge and exploring it for global medicinal research.</p>
        </div>
    </div>
</section>
<!-- heading end -->

<section class="bg-white dark:bg-gray-900 pb-16">
    <div class="container mx-auto lg:max-w-screen-lg xl:lg:max-w-screen-xl text-center">
        <h2 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-gray-300">A collaborative work of experts in the fields of taxonomy, phytochemistry, and ethnobotany, with the help of an IT team.</h2>
    </div>
    <div class="container mx-auto">

        <div class="gap-16 items-center pb-8 pb-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <p class="mb-4 text-justify">The Database of Traditional Medicinal Plants in Papua is a collaborative work of experts in the fields of taxonomy, phytochemistry, and ethnobotany, with the help of an IT team. The database is a comprehensive collection of information on the various medicinal plants recognized by the Indigenous Papuans in Papua, Indonesia, including their traditional uses, chemical properties, and potential health benefits. We welcome anyone with information on traditional medicinal plants from Papua to contribute with details on the plants used in their villages to treat illnesses. In addition, phytochemists, taxonomists, and ethnobotanists are also welcomed to contribute their expertise related to traditional medicinal plants from Papua that have been or have not been published on this database.</p>
            </div>
            <div class="mt-8 p-10">
                <img class="w-full rounded-lg dark:hidden" src="/assets/img/illustrations/1.png" alt="Illustration image">
                <img class="w-full rounded-lg hidden dark:block" src="/assets/img/illustrations/1-light.png" alt="Illustration image">
            </div>
        </div>
    </div>
</section>

@stop
