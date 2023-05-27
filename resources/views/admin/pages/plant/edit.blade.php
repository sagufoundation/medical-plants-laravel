
@extends('admin.layouts.admin-app')
    @section('title')
    Plant Edit - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')
<section>
    <div class="p-10 mt-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Edit Plant</h2>
            {{-- <p class="mb-4 font-light">Please input any relevant information into the form bellow.</p> --}}
        </div>
        <div class="relative overflow-x-auto sm:rounded-lg border p-7">

            <div class="md:w-2/3">
                <!-- form start -->

                <form class="space-y-4 md:space-y-6" method="POST" enctype="multipart/form-data" action="{{route('admin.plant.update', $data->id)}}">
                    @csrf
                    @method('put')
                    <div>
                        <label for="local_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Name</label>
                        <input type="local_name" name="local_name" id="local_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('local_name') ? old('local_name') : $data->local_name }}" >
                            @if($errors->has('local_name'))
                                <p class="text-red-900"> {{ $errors->first('local_name') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="taxonomists" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Taxonomists</label>
                        <input type="taxonomists" name="taxonomists" id="taxonomists"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required=""  value="{{old('taxonomists') ? old('taxonomists') : $data->taxonomists }}">
                            @if($errors->has('taxonomists'))
                                <p class="text-red-900"> {{ $errors->first('taxonomists') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="treatments" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treatments</label>
                        <input type="treatments" name="treatments" id="treatments"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('treatments') ? old('treatments') : $data->treatments }}">

                            @if($errors->has('treatments'))
                                <p class="text-red-900"> {{ $errors->first('treatments') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select name="status" id="status"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="Publish" @if($data->status == 'Publish') Selected @endif>Publish </option>
                                <option value="Review" @if($data->status == 'Review') Selected @endif>Review </option>
                                <option value="Draft" @if($data->status == 'Draft') Selected @endif>Draft </option>
                            </select>
                            @if($errors->has('status'))
                                <p class="text-red-900"> {{ $errors->first('status') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="cover_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover Picture</label>
                        <img src="{{url($data->cover_picture)}}" class="w-52 mb-5" alt="Plant's picture" srcset="">
                        <input type="file" name="cover_picture" id="cover_picture"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=""  >
                        @if($errors->has('cover_picture'))
                            <p class="text-red-900"> {{ $errors->first('cover_picture') }} </p>
                        @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="gallery_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gallery Picture</label>
                        <img src="{{url($data->gallery_picture)}}" class="w-52 mb-5" alt="Plant's picture" srcset="">
                        <input type="file" name="gallery_picture" id="gallery_picture"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required=""  >
                        @if($errors->has('gallery_picture'))
                            <p class="text-red-900"> {{ $errors->first('gallery_picture') }} </p>
                        @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="id_location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                            <select name="id_location" id="id_location"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Choose </option>
                                    @foreach ($locations as $location)
                                        @if ( $location->id  == $data->id_location )
                                            <option selected value="{{$location->id}}"> {{$location->tribes}} </option>
                                        @else
                                            <option value="{{$location->id}}"> {{$location->tribes}} </option>
                                        @endif
                                    @endforeach
                            </select>
                            @if($errors->has('id_location'))
                                <p class="text-red-900"> {{ $errors->first('id_location') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="id_contributor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contributor</label>
                            <select name="id_contributor" id="id_contributor"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Choose </option>
                                    @foreach ($contributors as $contributor )
                                        @if ( $contributor->id  == $data->id_contributor )
                                            <option selected value="{{$contributor->id}}"> {{$contributor->full_name}} </option>
                                        @else
                                            <option value="{{$contributor->id}}"> {{$contributor->full_name}} </option>
                                        @endif
                                    @endforeach
                            </select>
                            @if($errors->has('id_contributor'))
                                <p class="text-red-900"> {{ $errors->first('id_contributor') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->


                    <button type="submit"
                        class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 block">
                        <i class="fa-solid fa-paper-plane mr-2"></i>
                        Send
                    </button>
                </form>
                <!-- form end -->
            </div>

        </div>

    </div>
</section>


@stop
