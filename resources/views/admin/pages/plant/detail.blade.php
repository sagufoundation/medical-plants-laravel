
@extends('admin.layouts.admin-app')
    @section('title')
    Plant Detail - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')
<section>
    <div class="p-10 mt-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Detail Plant</h2>
            {{-- <p class="mb-4 font-light">Please input any relevant information into the form bellow.</p> --}}
        </div>
        <a href="{{route('admin.plant')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition"> Back <div class="fa-solid fa-circle-arrow-left ms-2"></div>  </a>

        <a href="{{route('admin.plant.edit', $data->slug_plant)}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition"> Edit <i class="fa-solid fa-pencil ms-2"></i>  </a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <div class="md:w-2/3">
                <!-- form start -->


                    <div>
                        <label for="local_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Name</label>
                        <input readonly type="local_name" name="local_name" id="local_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('local_name') ? old('local_name') : $data->local_name }}" >
                            @if($errors->has('local_name'))
                                <p class="text-red-900"> {{ $errors->first('local_name') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="taxonomists" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Taxonomists</label>
                        <input readonly type="taxonomists" name="taxonomists" id="taxonomists"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required=""  value="{{old('taxonomists') ? old('taxonomists') : $data->taxonomists }}">
                            @if($errors->has('taxonomists'))
                                <p class="text-red-900"> {{ $errors->first('taxonomists') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="treatments" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treatments</label>
                        <input readonly type="treatments" name="treatments" id="treatments"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('treatments') ? old('treatments') : $data->treatments }}">

                            @if($errors->has('treatments'))
                                <p class="text-red-900"> {{ $errors->first('treatments') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        @if ($data->status == '1')
                            {{$status = 'Publish'}}
                        @elseif ($data->status == '2')
                            {{$status = 'Review'}}
                        @elseif ($data->status == '3')
                            {{$status = 'Draft'}}
                        @endif
                        <input readonly type="status" name="status" id="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required="" value="{{old('status') ? old('status') : $status }}">
                            @if($errors->has('status'))
                                <p class="text-red-900"> {{ $errors->first('status') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="cover_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover Picture</label>
                        <img src="{{url($data->cover_picture)}}" class="w-52 mb-5" alt="{{$data->local_name}}" srcset="">

                        @if($errors->has('cover_picture'))
                            <p class="text-red-900"> {{ $errors->first('cover_picture') }} </p>
                        @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="id_location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>

                        <input readonly type="" name="Location" id="Location"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required=""  value="{{old('treatments') ? old('treatments') : $data->tribes }}">
                            @if($errors->has('id_location'))
                                <p class="text-red-900"> {{ $errors->first('id_location') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="id_contributor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contributor</label>
                        <input readonly type="" name="Location" id="Location"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required=""  value="{{old('treatments') ? old('treatments') : $data->full_name }}">
                            @if($errors->has('id_location'))
                                <p class="text-red-900"> {{ $errors->first('id_location') }} </p>
                            @endif
                            @if($errors->has('id_contributor'))
                                <p class="text-red-900"> {{ $errors->first('id_contributor') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->


                <!-- form end -->
            </div>

        </div>

    </div>
</section>


@stop