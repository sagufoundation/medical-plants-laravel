<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-green-700 dark:text-green-600">
                {!! $pengaturan->site_title !!}
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 text-justify">
                {!! $pengaturan->welcome_text !!}
            </p>
            <a  href="{{route('user.plant')}}"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 hover:shadow-lg transition">
                Explore the plants
                <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{!! $pengaturan->logo !!}" alt="mockup">
        </div>
    </div>

</section>
