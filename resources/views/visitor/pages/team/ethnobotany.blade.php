@extends('visitor.layouts.user-app')
    @section('title')
    Ethnobotany Team - Traditional Medicinal Plants in Papua
    @endsection
@section('content')


<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-2xl lg:text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-700">Ethobotany Team</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">The ethnobotany team is responsible for collecting and analyzing information on the traditional uses of medicinal plants by the Indigenous Papuan communities. They work closely with local community members to document the cultural significance of each plant and its traditional use.</p>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            <div class="bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="sm:w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="/assets/img/team/team-tisha-rumbewas.png"
                        alt="Tisha Rumbewas">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Tisha Rumbewas</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Ethnobotanist</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Collect and analyze information on traditional uses of medicinal plants by Indigenous Papuan communities to document the cultural significance of each plant and its traditional use.</p>
                    <ul class="flex space-x-4 sm:mt-0">
                        <li>
                            <a href="https://www.linkedin.com/in/tisha-rumbewas-92065b48/" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:trumbewas@gmail.com" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" title="trumbewas@gmail.com">
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
