@extends('user.layouts.user-app')
    @section('title')
        How To Contribute- Traditional Medicinal Plants in Papua
    @endsection
@section('content')
<!-- heading start -->
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl lg:pt-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-600">How To Contribute</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">We welcome everyone who want to be part of the project. We love to work and collaborate with local community and any experts.</p>
        </div>
    </div>
</section>
<!-- heading end -->
<section class="bg-white dark:bg-gray-900 pb-16">

    <div class="gap-8 items-center px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 lg:px-6 py-9">
        <div>
            <img class="w-1/3 mx-auto rounded-lg dark:hidden" src="./storage/images/illustrations/2.png" alt="Illustration image">
            <img class="w-1/3 mx-auto rounded-lg hidden dark:block" src="./storage/images/illustrations/2-light.png" alt="Illustration image">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-gray-300">For each individual or group of the local community in Papua</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400 text-justify">If you are a member of the local community in Papua and have knowledge of traditional medicinal plants used in your village to treat illnesses, we encourage you to share your insights with us. You can contribute to the database by providing detailed information on the plants, including their traditional names in your native language, traditional uses, and any other relevant details. Our team of taxonomists will provide the scientific names for the plants. To contribute, please contact us through the website and we will guide you through the process of submitting your information.</p>
        </div>
        <div>
            <img class="w-1/3 mx-auto rounded-lg dark:hidden" src="./storage/images/illustrations/3.png" alt="Illustration image">
            <img class="w-1/3 mx-auto rounded-lg hidden dark:block" src="./storage/images/illustrations/3-light.png" alt="Illustration image">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-gray-300">Phytochemist, taxonomist, or ethnobotanist</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400 text-justify">If you are a phytochemist, taxonomist, or ethnobotanist with expertise related to traditional medicinal plants from Papua, we welcome your contribution to the database. You can contribute by providing information on plants that have been or have not been published on the database, as well as any updates or corrections to existing plant profiles. To contribute, please contact us through the website and we will guide you through the process of submitting your information.</p>
        </div>
    </div>
</section>



@stop
