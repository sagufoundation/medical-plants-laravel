@extends('visitor.layouts.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section class="text-gray-600 body-font overflow-hidden">
    <div class="container max-w-screen-xl mx-auto p-4">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">

                <h1 class="text-gray-800 dark:text-gray-200 text-6xl title-font font-bold mb-4" >{{$data->local_name}}</h1>
                <h2 class="text-sm title-font text-gray-500 dark:text-gray-300 tracking-widest">{{$data->taxonomists}}</h2>

                <div class="my-4 text-gray-500">
                    <i class="fa-solid fa-map-marker"></i>
                    <a href="" class="ml-auto hover:underline"> {{$data->tribes}}</a>
                </div>

                <div class="border-b border-gray-400 py-2">
                    <span class="text-gray-500 block my-2">Plant name in Bahasa Indonesia</span>
                    <span class="ml-auto text-gray-800 dark:text-gray-200" >{{$data->local_name}}</span>
                </div>

                <div class="border-b border-gray-400 py-2">
                    <span class="text-gray-500 block my-2">Plant name in local language</span>
                    <span class="ml-auto text-gray-800 dark:text-gray-200" >{{$data->local_name}}</span>
                </div>

                <div class="border-b border-gray-400 py-2">
                    <span class="text-gray-500 block my-2">Plant name in Latin</span>
                    <span class="ml-auto text-gray-800 dark:text-gray-200">{{$data->taxonomists}}</span>
                </div>

                <div class="border-b border-gray-400 py-2">
                    <span class="text-gray-500 block my-2">Taxonomists</span>
                    <span class="ml-auto text-gray-800 dark:text-gray-200" >{{$data->taxonomists}}</span>
                </div>

                <div class="border-b border-gray-400 py-2">
                    <span class="text-gray-500 block my-2">Treatments</span>
                    <span class="ml-auto text-gray-800 dark:text-gray-200" >{{$data->treatments}}</span>
                </div>

                <div class="border-b border-gray-400 py-2">
                    <span class="text-gray-500 block my-2">Traditional usage</span>
                    <span class="ml-auto text-gray-800 dark:text-gray-200">{{$data->local_name}}</span>
                </div>

                <div class="border-b border-gray-400 py-2">
                    <span class="text-gray-500 block my-2">Contributor</span>
                    <div class="flex">
                        @if($data->photo == null)
                            <img  src="/assets/img/user-administrator.png" class="rounded-full w-16 transition ease-in-out delay-150 bg-blue-500 hover:-translate-5 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-lg cursor-pointer" alt="{{($data->full_name)}}">
                            <span class="mt-2 ml-2 dark:text-gray-200"> {{($data->full_name)}}</span>
                        @else
                            <img  src="{{url($data->photo)}}" class="rounded-full w-16 transition ease-in-out delay-150 bg-blue-500 hover:-translate-5 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-lg cursor-pointer" alt="{{($data->full_name)}}">
                            <span class="mt-2 ml-2 dark:text-gray-200"> {{($data->full_name)}}</span>
                        @endif

                    </div>
                </div>

            </div>

            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-md hover:shadow-lg cursor-pointer" alt="{{$data->local_name}}" src="{{url($data->cover_picture)}}">
        </div>
    </div>
</section>

@stop
