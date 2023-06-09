  <!-- HEADER START -->
  <header class="sticky top-0 shadow-lg dark:shadow-green-900/30">
    <nav class="bg-white border-b-4 border-gray-100 dark:border-green-700 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{ url('/')}}" class="flex items-center">
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
                        <a href="{{ route('visitor.home') }}"
                            @if(Request::segment(1) == 'home')
                            class="block py-2 pr-4 pl-3 text-green-700 font-bold rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @else
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @endif
                            aria-current="page"> Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visitor.thePlants') }}"
                            @if(Request::segment(1) == 'the-plants')
                            class="block py-2 pr-4 pl-3 text-green-700 font-bold rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @else
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @endif
                            aria-current="page"> The Plants
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visitor.overview')}}"
                            @if(Request::segment(1) == 'overview')
                            class="block py-2 pr-4 pl-3 text-green-700 font-bold rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @else
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @endif
                            aria-current="page"> Overview
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visitor.howToContribute') }}"
                            @if(Request::segment(1) == 'how-to-contribute')
                            class="block py-2 pr-4 pl-3 text-green-700 font-bold rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @else
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @endif
                            aria-current="page"> How To Contribute
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visitor.ourSponsors') }}"
                            @if(Request::segment(1) == 'our-sponsors')
                            class="block py-2 pr-4 pl-3 text-green-700 font-bold rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @else
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @endif
                            aria-current="page"> Our Sponsors
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visitor.connectWithUs') }}"
                            @if(Request::segment(1) == 'connect-with-us')
                            class="block py-2 pr-4 pl-3 text-green-700 font-bold rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @else
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded bg-green-700 lg:bg-transparent hover:text-green-600 lg:p-0 dark:text-gray-400"
                            @endif
                            aria-current="page"> Connect With us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- HEADER END -->
