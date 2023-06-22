@extends('admin.layouts.admin-app')
    @section('title')
    Plant Detail - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section>
    <div class="py-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-6 text-4xl tracking-tight font-bold text-gray-700">Detail Plant</h2>
        </div>
        <a href="{{route('admin.plant')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition">
            <div class="fa-solid fa-circle-arrow-left me-2"></div> Back
        </a>

        <a href="{{route('admin.plant.edit', $data->id)}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition">
            <i class="fa-solid fa-pencil me-2"></i> Edit
        </a>

        <div class="relative overflow-x-auto sm:rounded-lg border p-7">

            <div class="md:w-2/3">

                    <div class="mb-5">
                        <label for="local_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Name</label>
                        {{ $data->local_name }}
                    </div>
                    <!-- item end -->

                    <div class="mb-5">
                        <label for="local_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Taxonomists</label>
                        {{ $data->taxonomists }}
                    </div>
                    <!-- item end -->

                    <div class="mb-5">
                        <label for="local_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treatments</label>
                        {{ $data->treatments }}
                    </div>
                    <!-- item end -->

                    <div class="mb-5">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            {{$data->status}}


                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="cover_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover Picture</label>
                        <img src="{{ url($data->cover_picture) }}" class="mb-5" alt="{{ $data->local_name }}" width="250px">
                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="gallery_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gallery Picture</label>
                        <img src="{{ url($data->gallery_picture) }}" class="mb-5 border shadow" alt="{{ $data->gallery_picture }}" width="550px">
                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="id_location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        {{ $data->tribes }}
                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="id_contributor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contributor</label>
                        {{ $data->full_name }}
                    </div>
                    <!-- input item end -->


                <!-- form end -->
            </div>

        </div>

    </div>
</section>


@stop
