
@extends('admin.layouts.admin-app')
    @section('title')
    Location - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')


<section>
    <div class="p-10 mt-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Detail Location</h2>
            {{-- <p class="mb-4 font-light">Please input any relevant information into the form bellow.</p> --}}
        </div>

        <a href="{{route('admin.location')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition">
            <div class="fa-solid fa-circle-arrow-left me-2"></div> Back
        </a>

        <a href="{{route('admin.location.edit', $data->id)}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition">
            <i class="fa-solid fa-pencil me-2"></i> Edit
        </a>

        <div class="relative overflow-x-auto sm:rounded-lg border p-7">

            <div class="md:w-2/3">

                <div class="mb-5">
                    <label for="icon_id" class="block mb-2 ext-sm font-medium text-gray-900 dark:text-white">Icon </label>

                        @foreach ($icons as $icon )
                            @if($icon->id == $data->icon_id)
                            <div class="flex">
                                <img src="{{ $icon->icon_img }}" alt="Contributor's Picture" width="" class="rounded me-2"> 
                            {{ $icon->icon_name }}
                            </div>
                            @endif
                        @endforeach
                </div>
                <!-- input item end -->
                
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tribes</label>
                    {{ $data->tribes }}
                </div>
                <!-- item end -->
                
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    {{ $data->desc }}
                </div>
                <!-- item end -->
                
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Long</label>
                    <input type="text" value="{{ $data->long }}">
                </div>
                <!-- item end -->
                
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lat</label>
                    <input type="text" value="{{ $data->lat }}">
                </div>
                <!-- item end -->
                
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                    <a href="{{ $data->link }}" target="_blank" class="text-blue-700" title="Open in new tap">{{ $data->link }}</a>
                </div>
                <!-- item end -->
                
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    {{ $data->status }}
                </div>
                <!-- item end -->

            </div>

        </div>

    </div>
</section>

@stop
