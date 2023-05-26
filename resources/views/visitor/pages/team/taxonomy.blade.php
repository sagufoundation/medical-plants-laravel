@extends('visitor.layouts.user-app')
    @section('title')
    Taxonomy Team - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-700">Taxonomy Team</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">The taxonomy team is responsible for the classification and naming of the traditional medicinal plants in the database. They use their expertise to identify each plant species and provide accurate scientific names.</p>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="sm:w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="/assets/img/team/team-jimmy-wanma.png"
                        alt="Jimmy F. Wanma">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Jimmy F. Wanma</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Taxonomist</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Classify and name traditional medicinal plants using their expertise in taxonomy.</p>
                    <ul class="flex space-x-4 sm:mt-0">
                        <li>
                            <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" title="#">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="sm:w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="/assets/img/team/team-default.png"
                        alt="Victor I. Simbiak">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Victor I. Simbiak</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Taxonomist</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Classify and name traditional medicinal plants using their expertise in taxonomy.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:#" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" title="#">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
