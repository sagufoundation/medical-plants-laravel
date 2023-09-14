
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name=”robots” content=”noindex”>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traditional Medicinal Plants in Papua</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/188/188333.png">

    <!-- TAILWIND CSS -->

    <!-- FLOWBITE -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- vimesh-ui -->
    <script src="https://unpkg.com/@vimesh/ui"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>

    @vite('resources/css/app.css')

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>

<body x-data="
        {
            page: 'index',
            detail: [{
                plant_name_in_local : '',
                plant_photo : '',
                plant_name_in_local: '',
                plant_name_in_latin: '',
                contributor: '',
                treatments: '',
                updated_at: ''
            }]
        }
    "
    class="dark:bg-gray-900"
    >

    <!-- HEADER START -->
    <header class="sticky top-0 shadow-lg dark:shadow-green-900/30">
        <nav class="bg-white border-b-4 border-gray-100 dark:border-green-700 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a @click.prevent="page='index'" href="index.html" class="flex items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/188/188333.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-green-800 dark:text-green-600">Traditional Medicinal Plants in Papua</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                </div>
                <div class=" justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a @click.prevent="page='index'" href="#"
                                x-bind:class="page == 'index' ? 'dark:text-green-600 lg:text-green-700' : 'dark:border-gray-700 lg:text-gray-700'"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                                aria-current="page">
                                Home
                            </a>
                        </li>
                        <li>
                            <a @click.prevent="page='theplants'" href="#"
                                x-bind:class="page == 'theplants' ? 'dark:text-green-600 lg:text-green-700' : 'dark:border-gray-700 lg:text-gray-700'"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                                aria-current="page">
                                The Plants
                            </a>
                        </li>
                        <li>
                            <a @click.prevent="page='overview'" href="#"
                                x-bind:class="page == 'overview' ? 'dark:text-green-600 lg:text-green-700' : 'dark:border-gray-700 lg:text-gray-700'"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                                aria-current="page">
                                Overview
                            </a>
                        </li>
                        <li>
                            <a @click.prevent="page='howtocontribute'" href="#"
                                x-bind:class="page == 'howtocontribute' ? 'dark:text-green-600 lg:text-green-700' : 'dark:border-gray-700 lg:text-gray-700'"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                                aria-current="page">
                                How To Contribute
                            </a>
                        </li>
                        <li>
                            <a @click.prevent="page='oursponsors'" href="#"
                                x-bind:class="page == 'oursponsors' ? 'dark:text-green-600 lg:text-green-700' : 'dark:border-gray-700 lg:text-gray-700'"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                                aria-current="page">
                                Our Sponsors
                            </a>
                        </li>
                        <li>
                            <a @click.prevent="page='connectwithus'" href="#"
                                x-bind:class="page == 'connectwithus' ? 'dark:text-green-600 lg:text-green-700' : 'dark:border-gray-700 lg:text-gray-700'"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                                aria-current="page">
                                Connect With Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- HEADER END -->

    <!-- PAGES -->
    <div x-include="./pages.html"></div>

    <!-- FOOTER -->
    <footer class="p-4 bg-gray-200 sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl pt-10">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 lg:w-1/2">
                    <a href="#" class="flex items-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/188/188333.png" class="mr-3 w-full lg:w-10" alt="Logo" />
                        <span class="hidden lg:block self-center text-2xl font-semibold whitespace-nowrap text-green-700 dark:text-green-600">Traditional Medicinal Plants in Papua</span>
                    </a>

                    <div class="p-4 lg:pr-10 text-gray-800 dark:text-gray-400">
                        <p class="mb-6 text-justify">Welcome to the Database of Traditional Medicinal Plants in Papua, a comprehensive and easily accessible resource for researchers, healthcare practitioners, and anyone interested in traditional medicine, aiming to promote the importance of preserving traditional medicinal knowledge and exploring it for global medicinal research.</p>

                        <a @click.prevent="page='connectwithus'" href="#"
                            class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-green-700 hover:text-gray-200 rounded-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 hover:shadow-lg transition">
                            Connect with us
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>

                    </div>
                    <div class="p-4 sm:flex sm:items-center sm:justify-between">

                        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 grid lg:grid-cols-3 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-green-600">Our Team
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-3">
                                <a @click.prevent="page='developerteam'" href="" class="hover:underline">Developer Team</a>
                            </li>
                            <li class="mb-3">
                                <a @click.prevent="page='taxonomyteam'" href="" class="hover:underline">Taxonomy Team</a>
                            </li>
                            <li class="mb-3">
                                <a @click.prevent="page='ethnobotanyteam'" href="" class="hover:underline">Ethnobotany Team</a>
                            </li>
                            <li class="mb-3">
                                <a @click.prevent="page='phytochemistryteam'" href="" class="hover:underline">Phytochemistry Team</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-green-600">What We Do</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-3">
                                <a @click.prevent="page='discover'" href="" class="hover:underline ">Discover</a>
                            </li>
                            <li class="mb-3">
                                <a @click.prevent="page='research'" href="" class="hover:underline">Research</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-green-600">Privacy & Policy
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-3">
                                <a @click.prevent="page='privacyandpolicy'" href="" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li class="mb-3">
                                <a @click.prevent="page='termsandconditions'" href="" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>

                        <div>
                            <hr class="my-4 border border-gray-600">
                            <div id="google_translate_element"></div>
                        </div>

                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                    © 2023 <a href="#" class="hover:underline">Traditional Medicinal Plants in Papua™</a>. All Rights Reserved.
                </span>

                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a @click.prevent="page='login'" href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-solid fa-sign-in"></i> Login
                    </a>

                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="./tailwind.config.js"></script>

    <!-- SCRIPT -->
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function () {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>

    <!-- GOOGLE TRANSLATION -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
