@extends('user.layouts.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<!-- heading start -->
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl lg:pt-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-600">The Plants</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.</p>
        </div>
    </div>
</section>
<!-- heading end -->

    <!-- SEARCH START -->
    <section class="py-9">
        <div class="container max-w-screen-xl mx-auto p-4">
            <form class="">
                <div class="mb-4 flex justify-between">
                    <input
                        class="shadow appearance-none border border-gray-300 rounded-lg w-full px-6 py-6 text-gray-600 leading-tight focus:outline-none focus:shadow-outline focus:shadow-lg focus:border-none transition text-xl"
                        id="username" type="text" placeholder="Type your keywords here...">
                    <button @click.prevent="page='dataTanaman'" type="submit"
                        class="inline-flex items-center justify-center px-6 py-3 font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 cursor-pointer ml-3 text-xl focus:outline-none focus:shadow-outline focus:shadow-lg">
                        <i class="fa-solid fa-search mr-2"></i> Search
                    </button>
                </div>

                <div class="lg:w-2/3">
                    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Filter by</h3>
                    <ul
                        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white shadow-sm">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-license" type="radio" value="" name="list-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                                <label for="horizontal-list-radio-license"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Plant name</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-id" type="radio" value="" name="list-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                                <label for="horizontal-list-radio-id"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Tribe</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-millitary" type="radio" value="" name="list-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                                <label for="horizontal-list-radio-millitary"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Year</label>
                            </div>
                        </li>
                        <li class="w-full dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-passport" type="radio" value="" name="list-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 cursor-pointer">
                                <label for="horizontal-list-radio-passport"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Contributor name</label>
                            </div>
                        </li>
                    </ul>

                </div>
            </form>
        </div>
    </section>
    <!-- SEARCH END -->

<script src="./assets/js/dataPlants.js"> </script>

<section class="bg-white dark:bg-gray-900 pb-16">
    <div class="container max-w-screen-xl mx-auto p-4" x-data="data" >

        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-6" id="dataPlants">
            <!-- platn's data -->
            <template x-for="plant in plants">
                <div>
                    <a
                        @click.prevent="
                            page='theplantsdetail'
                            detail[0].created_at=plant.created_at
                            detail[0].updated_at=plant.updated_at
                            detail[0].plant_name_in_indonesia=plant.plant_name_in_indonesia
                            detail[0].plant_name_in_local=plant.plant_name_in_local
                            detail[0].plant_name_in_latin=plant.plant_name_in_latin
                            detail[0].plant_photo=plant.plant_photo
                            detail[0].taxonomists=plant.taxonomists
                            detail[0].treatments=plant.treatments
                            detail[0].traditional_usage=plant.traditional_usage
                            detail[0].contributor=plant.contributor
                            detail[0].treatments=plant.treatments
                            detail[0].tribe=plant.tribe
                            detail[0].contributor_photo=plant.contributor_photo
                        "
                    href="" class="cursor-pointer">
                        <img x-bind:src="plant.plant_photo" src="plant.plant_photo" class="mb-4 rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md" alt="plant.plant_photo">
                    </a>
                    <a href="" class="dark:text-gray-500 hover:underline"><i class="fa-solid fa-map-marker"></i> <span x-text="plant.tribe"></span></a>

                    <h3 class="text-4xl font-bold text-green-600 my-1" x-text="plant.plant_name_in_local"></h3>
                    <p class="dark:text-gray-300 mb-2"><span x-html="plant.plant_name_in_latin"></span></p>

                    <div class="grid grid-cols-2 text-sm mb-4">
                        <p class="dark:text-gray-500"><i class="fa-solid fa-user"></i> <span x-text="plant.contributor"></span></p>
                        <p class="dark:text-gray-500"><i class="fa-solid fa-calendar-check"></i> <span x-text="plant.updated_at"></span></p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>


@stop
