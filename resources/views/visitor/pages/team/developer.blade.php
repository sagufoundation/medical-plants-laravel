@extends('visitor.layouts.user-app')
    @section('title')
    Developer Team - Traditional Medicinal Plants in Papua
    @endsection
@section('content')


<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-700">Developer Team</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">This team is responsible for designing, building, and maintaining the technical infrastructure of the database. They ensure that the website is functional, user-friendly, and secure for both contributors and users.</p>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="sm:w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="/assets/img/team/team-janzen-faidiban.png"
                        alt="Janzen Faidiban">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Janzen Faidiban</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Web Developer</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Design, build, and maintain the technical infrastructure of the database.</p>
                    <ul class="flex space-x-4 sm:mt-0">
                        <li>
                            <a href="https://www.linkedin.com/in/janzen-faidiban-48ba28169/" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/janzenfaidiban" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:janzenfaidiban@gmail.com" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" title="janzenfaidiban@gmail.com">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="/assets/img/team/team-samuel-bosawer.png"
                        alt="Samuel Bosawer">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Samuel Bosawer</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">GIS Developer</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Samuel is a web developer who contribute in developing GIS system and backend of the app.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="https://www.linkedin.com/in/samuel-bosawer-8a278b239/" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/samuelbosawer" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:zam.bosawer@gmail.com" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" title="zam.bosawer@gmail.com">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>

            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="/assets/img/team/team-johan-nasendi.png"
                        alt="John Nasendi">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">John Nasendi</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Back-End Develope</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Johan is a web developer who contribute in backend of the app.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="https://www.linkedin.com/in/johannasendi/" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/johan-nasendi" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:pachenoghe01@gmail.com" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" title="pachenoghe01@gmail.com">
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
