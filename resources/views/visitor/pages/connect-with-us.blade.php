@extends('visitor.layouts.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')


<!-- heading start -->
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl lg:pt-16 lg:px-6 pb-9">
        <div class="mx-auto max-w-screen-sm text-center">
            <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-gray-900 dark:text-green-600">Connect With Us </h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">We welcome contributions from local community members as well as experts in the fields of phytochemistry, ethnobotany, and taxonomy.
            </p>
        </div>
    </div>
</section>
<!-- heading end -->

<section class="bg-white dark:bg-gray-900 pb-16">
    <div class="grid grid-cols-2 px-4 mx-auto max-w-screen-xl">
        <div class="pr-10 text-center">

            <img src="{{ asset($pengaturan->logo) }}" alt="Logo">

            {{-- <h2 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-gray-300 mb-6">Send us message</h2>

            <form action="">
                <div class="sm:col-span-2 mb-4">
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200">Full Name</label>
                    <div class="mt-1">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="block w-full rounded-md border-0 px-3.5 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Your full name">
                    </div>
                </div>

                <div class="sm:col-span-2 mb-4">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200">Email Address</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="block w-full rounded-md border-0 px-3.5 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Your email address">
                    </div>
                </div>
                <!-- input item end -->
                <div class="sm:col-span-2 mb-4">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200">Message</label>
                    <div class="mt-1">
                        <textarea name="message" id="message" rows="4"
                            class="block w-full rounded-md border-0 px-3.5 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="What you want to say to us?"></textarea>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit"
                        class="block w-full rounded-md bg-indigo-600 px-3.5 py-4 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="fa-solid fa-paper-plane mr-2"></i>Send now</button>
                </div>
            </form> --}}

        </div>
        <div>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400 text-justify"> To connect with us and contribute to
                the Database of Traditional Medicinal Plants in Papua, please visit our website and fill out the contact
                form. Our team will review your message and provide guidance on how to submit your information. We
                welcome contributions from local community members as well as experts in the fields of phytochemistry,
                ethnobotany, and taxonomy. Thank you for your interest in our project!</p>

            <div class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                <ul>
                    <li class="mb-3">
                        <a href="mailto:trumbewas@gmail.com"><i class="fa-solid fa-envelope mr-2"></i> trumbewas@gmail.com</a>
                    </li>
                    <li class="mb-3">
                        <a href="call:+6282199166540"><i class="fa-solid fa-phone mr-2"></i> +62 821 991 66540</a> <span class="mx-3">or</span> <a href="https://wa.link/jqof4f" target="_blank" class="text-gray-200 px-3 py-2 rounded bg-green-700 hover:bg-green-800 transition"><i class="fa-brands fa-whatsapp mr-2"></i> Chat via WhatsApp</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


@stop
