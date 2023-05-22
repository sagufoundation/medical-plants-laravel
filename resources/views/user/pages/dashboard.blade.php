@extends('user.layouts.user-app')
    @section('title')
   Home - Traditional Medicinal Plants in Papua
    @endsection
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-green-700 dark:text-green-600">
                    Database of Traditional Medicinal Plants in Papua</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 text-justify">Welcome
                    to the Database of Traditional Medicinal Plants in Papua, a comprehensive and easily accessible resource
                    for researchers, healthcare practitioners, and anyone interested in traditional medicine, aiming to
                    promote the importance of preserving traditional medicinal knowledge and exploring it for global
                    medicinal research.</p>
                <a @click.prevent="page='theplants'" href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 hover:shadow-lg transition">
                    Explore the plants
                    <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://cdn-icons-png.flaticon.com/512/188/188333.png" alt="mockup">
            </div>
        </div>

    </section>

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

    <section>
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8170528.372393557!2d139.75319920177446!3d-4.648661742629266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1680667741524!5m2!1sen!2sid"
                width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
</section>



@stop

