
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

        <a href="{{route('admin.contributor')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition"> Back <div class="fa-solid fa-circle-arrow-left ms-2"></div>  </a>

        <a href="{{route('admin.contributor.edit', $data->id)}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition"> Edit <i class="fa-solid fa-pencil ms-2"></i>  </a>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Photo
                            </th>
                            <td scope="col" class="px-6 py-3">
                                @if ($data->photo == null)
                                    <img class="w-8 h-8 rounded-full" src="/assets/img/user-administrator.png"
                                    alt="{{$data->full_name}}">
                                @else
                                <img class="w-8 h-8 rounded-full" src="{{url($data->photo)}}">
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Full Name
                            </th>
                            <td scope="col" class="px-6 py-3">
                                {{$data->full_name}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <td scope="col" class="px-6 py-3">
                                {{$data->email}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <td scope="col" class="px-6 py-3">
                                {{$data->address .' '.$data->city .' '.$data->province}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Descriptions
                            </th>
                            <td scope="col" class="px-6 py-3">
                                {{$data->descriptions}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Status Contributor
                            </th>
                            <td scope="col" class="px-6 py-3">
                                @if($data->status_contributor == '1')
                                Publish
                                @elseif($data->status_contributor == '2')
                                Review
                                @elseif($data->status_contributor == '3')
                                Draft
                                @endif
                            </td>
                        </tr>
                </thead>
            </table>

        </div>

    </div>
</section>

@stop
