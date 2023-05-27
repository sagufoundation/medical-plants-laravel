    <!-- FOOTER -->

    <footer class="p-4 bg-gray-200 sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl pt-10">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 lg:w-1/2">
                    <a href="#" class="flex items-center">
                        <img src="{{ url($pengaturan->logo)  }}" class="mr-3 w-full lg:w-10" alt="Logo" />
                        <span class="hidden lg:block self-center text-2xl font-semibold whitespace-nowrap text-green-700 dark:text-green-600">
                            {!! $pengaturan->site_title  !!}
                        </span>
                    </a>

                    <div class="p-4 lg:pr-10 text-gray-800 dark:text-gray-400">
                        <p class="mb-6 text-justify">{!! $pengaturan->site_description  !!}</p>

                        <a @click.prevent="page='connectwithus'" href="#"
                            class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-green-700 hover:text-gray-200 rounded-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 hover:shadow-lg transition">
                            Connect with us
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>

                    </div>
                    <div class="p-4 sm:flex sm:items-center sm:justify-between">

                        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                            <a href="{{$pengaturan->facebook}}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="{{$pengaturan->instagram}}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="{{$pengaturan->twitter}}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="{{$pengaturan->linkedin}}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="{{$pengaturan->youtube}}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
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
                                <a  href="{{ url('team/developer') }}" class="hover:underline">Developer Team</a>
                            </li>
                            <li class="mb-3">
                                <a  href="{{ url('team/taxonomy') }}" class="hover:underline">Taxonomy Team</a>
                            </li>
                            <li class="mb-3">
                                <a  href="{{ url('team/ethnobotany') }}" class="hover:underline">Ethnobotany Team</a>
                            </li>
                            <li class="mb-3">
                                <a  href="{{ url('team/phytochemistry') }}" class="hover:underline">Phytochemistry Team</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-green-600">What We Do</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-3">
                                <a href="{{ url('what-we-do/discover') }}" class="hover:underline ">Discover</a>
                            </li>
                            <li class="mb-3">
                                <a  href="{{ url('what-we-do/research') }}" class="hover:underline">Research</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-green-600">Privacy & Policy
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-3">
                                <a  href="{{ url('privacy-policy') }}" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li class="mb-3">
                                <a href="{{ url('terms-contditions') }}" class="hover:underline">Terms &amp; Conditions</a>
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
                    {!! $pengaturan->copyright  !!}
                </span>

                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    @if(auth()->user())
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-solid fa-sign-in"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <a href="{{route('login')}}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-solid fa-sign-in"></i> Login
                    </a>

                    @endif

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
