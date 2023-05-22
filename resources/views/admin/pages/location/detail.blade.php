
@extends('admin.layouts.admin-app')
    @section('title')
    Location Detail - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')


<section>
    <div class="p-10 mt-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Detail location</h2>
            <p class="mb-4 font-light">Please input any relevant information into the form bellow.</p>
        </div>

        <a href="{{route('admin.location')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition"> Back <div class="fa-solid fa-circle-arrow-left ms-2"></div>  </a>

        <a href="{{route('admin.location.edit', $data->slug)}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mb-5 hover:shadow-lg transition"> Edit <i class="fa-solid fa-pencil ms-2"></i>  </a>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <div class="md:w-2/3">
                <!-- form start -->


                    <div>
                        <label for="tribes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tribes</label>
                        <input readonly type="tribes" name="tribes" id="tribes"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('tribes') ? old('tribes') : $data->tribes }}" >
                            @if($errors->has('tribes'))
                                <p class="text-red-900"> {{ $errors->first('tribes') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desc</label>
                        <input readonly type="desc" name="desc" id="desc"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required=""  value="{{old('desc') ? old('desc') : $data->desc }}">
                            @if($errors->has('desc'))
                                <p class="text-red-900"> {{ $errors->first('desc') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="long" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Long</label>
                        <input readonly type="long" name="long" id="long"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('long') ? old('long') : $data->long }}">

                            @if($errors->has('long'))
                                <p class="text-red-900"> {{ $errors->first('long') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="lat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lat</label>
                        <input readonly type="lat" name="lat" id="lat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('lat') ? old('lat') : $data->lat }}">

                            @if($errors->has('lat'))
                                <p class="text-red-900"> {{ $errors->first('lat') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                        <input readonly type="link" name="link" id="link"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('link') ? old('link') : $data->link }}">

                            @if($errors->has('link'))
                                <p class="text-red-900"> {{ $errors->first('link') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->


                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status </label>
                        @if ($data->status == '1')
                            {{$status = 'Publish'}}
                        @elseif ($data->status == '2')
                            {{$status = 'Review'}}
                        @elseif ($data->status == '3')
                            {{$status = 'Draft'}}
                        @endif
                        <input readonly type="link" name="link" id="link"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required="" value="{{old('link') ? old('link') : $status }}">
                            @if($errors->has('status'))
                                <p class="text-red-900"> {{ $errors->first('status') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="icon_id" class="block mb-2 ext-sm font-medium text-gray-900 dark:text-white">Icon </label>

                                    @foreach ($icons as $icon )
                                        @if($icon->id == $data->icon_id)
                                            <input readonly type="link" name="link" id="link"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required="" value="{{old('link') ? old('link') : $icon->icon_name }}">
                                        @endif
                                    @endforeach

                            @if($errors->has('icon_id'))
                                <p class="text-red-900"> {{ $errors->first('icon_id') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->


                <!-- form end -->
            </div>

        </div>

    </div>
</section>


@stop
