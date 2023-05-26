    <!-- ASIDE -->
    <aside class="fixed top-0 left-0 w-64 h-full" aria-label="Sidenav">
        <div
            class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <ul class="space-y-2 lg:pt-16">
                <li>
                    <a  href="{{route('admin.dashboard')}}" x-bind:class="page == 'dashboard' ? 'flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer trainsition' : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-600 hover:bg-gray-700 dark:hover:text-gray-300 bg-green-100 dark:hover:bg-gray-700 cursor-pointer transition'">

                        <span class="ml-1 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <i class="fa-solid fa-dashboard "></i>
                        </span>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                        <span
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                            <i class="fa-solid fa-leaf "></i>
                        </span>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">The Plants </span>
                        <svg aria-hidden="@if(Request::segment(2) != 'plant')) true @endif" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-pages" class="@if(Request::segment(2) != 'plant')) hidden @endif py-2 space-y-2">
                        <li>
                            <a href="{{route('admin.plant')}}/publish"
                                x-bind:class="page == 'plantPublished' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Published</a>
                        </li>
                        <li>
                            <a href="{{route('admin.plant')}}/review"
                            x-bind:class="page == 'plantInReview' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">In Review</a>
                        </li>
                        <li>
                            <a href="{{route('admin.plant')}}/draft"
                            x-bind:class="page == 'plantDraft' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Draft</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-location" data-collapse-toggle="dropdown-location">

                        <span
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                            <i class="fa-solid fa-map"></i>
                        </span>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Location</span>
                        <svg aria-hidden="@if(Request::segment(2) != 'location')) true @endif" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-location" class="@if(Request::segment(2) != 'location')) hidden @endif py-2 space-y-2">
                        <li>
                            <a href="{{route('admin.location')}}/publish"
                                x-bind:class="page == 'contributorPublished' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Published</a>
                        </li>
                        <li>
                            <a href="{{route('admin.location')}}/review"
                            x-bind:class="page == 'contributorInReview' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">In Review</a>
                        </li>
                        <li>
                            <a href="{{route('admin.location')}}/draft"
                            x-bind:class="page == 'contributorDraft' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Draft</a>
                        </li>
                        <li>
                            <a href="{{route('admin.icon')}}"
                            x-bind:class="page == 'contributorDraft' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Icon</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">

                        <span
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Contributor</span>
                        <svg aria-hidden="@if(Request::segment(2) != 'contributor')) true @endif" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-sales" class="@if(Request::segment(2) != 'contributor')) hidden @endif py-2 space-y-2">
                        <li>
                            <a  href="{{route('admin.contributor')}}/publish"
                                x-bind:class="page == 'contributorPublished' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Published</a>
                        </li>
                        <li>
                            <a href="{{route('admin.contributor')}}/review"
                            x-bind:class="page == 'contributorInReview' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">In Review</a>
                        </li>
                        <li>
                            <a href="{{route('admin.contributor')}}/draft"
                            x-bind:class="page == 'contributorDraft' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Draft</a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-message" data-collapse-toggle="dropdown-message">

                        <span
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Messages</span>
                        <svg aria-hidden="@if(Request::segment(2) != 'message')) true @endif" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-message" class="@if(Request::segment(2) != 'message')) hidden @endif py-2 space-y-2">
                        <li>
                            <a  href="{{route('admin.message')}}/publish"
                                x-bind:class="page == 'messagePublished' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Published</a>
                        </li>
                        <li>
                            <a href="{{route('admin.message')}}/review"
                            x-bind:class="page == 'messageInReview' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">In Review</a>
                        </li>
                        <li>
                            <a href="{{route('admin.message')}}/draft"
                            x-bind:class="page == 'messageDraft' ? 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group bg-green-100 hover:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-700 cursor-pointer' : 'flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 cursor-pointer'">Draft</a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20">
            <a href="#" data-tooltip-target="tooltip-settings"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3">Settings</span>
            </a>
            <div id="tooltip-settings" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                Settings page
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </aside>
