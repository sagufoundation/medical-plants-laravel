
@extends('admin.layouts.admin-app')
    @section('title')
    Contributor {{$judul}} - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section>
    <div class="py-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Data Contributor {{$judul}}</h2>
            {{-- <p class="mb-4 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident pariatur fugit, dolorem possimus vel eius totam ad aut dolores atque!</p> --}}
        </div>

        <a href="{{route('admin.contributor.create')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition">
            <div class="fa-solid fa-plus me-2"></div> New
        </a>

        <div class="relative overflow-x-auto sm:rounded-lg border p-7">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Photo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Full Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Option
                        </th>
                    </tr>
                </thead>
                <tbody >
                    <tbody>
                        @foreach ($all as $data )
                        <tr>
                            <td scope="col" class="px-6 py-3">
                                @if ($data->photo == null)
                                    <img class="w-8 h-8 rounded-full" src="/assets/img/user-administrator.png"
                                    alt="{{$data->full_name}}">
                                @else
                                <img src="{{url($data->photo)}}" class="" width="100px">
                                @endif
                            </td>
                            <td scope="col" class="px-6 py-3">
                                {{$data->full_name}}
                            </td>
                            <td scope="col" class="px-6 py-3">
                                {{$data->email}}
                            </td>
                            <td scope="col" class="px-6 py-3">
                                {{$data->address .' '.$data->city .' '.$data->province}}
                            </td>
                            <td scope="col" class="px-6 py-3 flex gap-1">
                                <a href="{{ route('admin.contributor.show', $data->id)}}" class="bg-green-700 hover:bg-green-800 text-gray-200 px-3 py-2 rounded transition"><i class="fa-solid fa-eye"></i> Preview</a>

                                <a href="{{ route('admin.contributor.edit', $data->id)}}" class="border border-green-800 text-green-800 hover:bg-green-800 hover:text-white px-3 py-2 rounded transition"><i class="fa-solid fa-pencil"></i></a>

                                <form action="{{ route('admin.contributor.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border border-red-500 text-red-500 hover:bg-red-600 hover:text-white px-3 py-2 rounded transition"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </tbody>
            </table>

        </div>

    </div>
</section>

@stop
