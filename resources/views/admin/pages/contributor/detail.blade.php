
@extends('admin.layouts.admin-app')
    @section('title')
    Contributor Detail - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section>
    <div class="py-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Data Detail Contributor</h2>
            {{-- <p class="mb-4 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident pariatur fugit, dolorem possimus vel eius totam ad aut dolores atque!</p> --}}
        </div>

        <a href="{{route('admin.contributor')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition">
            <div class="fa-solid fa-circle-arrow-left me-2"></div> Back
        </a>

        <a href="{{route('admin.contributor.edit', $data->id)}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition">
            <i class="fa-solid fa-pencil me-2"></i>Edit
        </a>

        <div class="relative overflow-x-auto sm:rounded-lg border p-7">

            <div class="md:w-2/3">

                <div class="mb-5">
                    @if ($data->photo == null)
                        <img class="rounded" src="/assets/img/user-administrator.png" alt="Contributor's Picture" width="150px">
                    @else
                    <img class="rounded" src="{{url($data->photo)}}" alt="Contributor's Picture" width="150px">
                    @endif
                </div>
                <!-- item end -->

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                    {{ $data->full_name }}
                </div>
                <!-- item end -->

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    {{ $data->email }}
                </div>
                <!-- item end -->

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    {{ $data->address }}
                </div>
                <!-- item end -->

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descriptions</label>
                    {{ $data->description }}
                </div>
                <!-- item end -->

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    {{ $data->status_contributor }}
                </div>
                <!-- item end -->

            </div>

        </div>

    </div>
</section>

@stop
