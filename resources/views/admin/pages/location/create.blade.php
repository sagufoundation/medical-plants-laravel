
@extends('admin.layouts.admin-app')
    @section('title')
    Location Create - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section>
    <div class="p-10 mt-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Add a New Location</h2>
            {{-- <p class="mb-4 font-light">Please input any relevant information into the form bellow.</p> --}}
        </div>
        
        <div class="relative overflow-x-auto sm:rounded-lg border p-7">

            <div class="md:w-2/3">
                <!-- form start -->

                <form class="space-y-4 md:space-y-6" method="POST" enctype="multipart/form-data" action="{{route('admin.location.store')}}">
                    @csrf
                    <div>
                        <label for="tribes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tribe Name</label>
                        <input type="tribes" name="tribes" id="tribes"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{ old('tribes')}}" >
                            @if($errors->has('tribes'))
                                <small class="text-red-500"> {{ $errors->first('tribes') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="desc" name="desc" id="desc"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required=""  value="{{ old('desc')}}">
                            @if($errors->has('desc'))
                                <p class="text-red-900"> {{ $errors->first('desc') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="lat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
                        <input type="lat" name="lat" id="lat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('lat')}}">
                            @if($errors->has('lat'))
                                <small class="text-red-500"> {{ $errors->first('lat') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->


                    <div>
                        <label for="long" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
                        <input type="long" name="long" id="long"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('long')}}">
                            @if($errors->has('long'))
                                <small class="text-red-500"> {{ $errors->first('long') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->



                    <div>
                        <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                        <input type="link" name="link" id="link"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{old('link')}}">
                            @if($errors->has('link'))
                                <small class="text-red-500"> {{ $errors->first('link') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->


                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status </label>
                            <select name="status" id="status"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Choose </option>
                                    <option value="Publish">Publish </option>
                                    <option value="Review">Review </option>
                                    <option value="Draft">Draft </option>
                            </select>
                            @if($errors->has('status'))
                                <small class="text-red-500"> {{ $errors->first('status') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="icon_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Icon </label>
                            <select name="icon_id" id="icon_id"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Choose </option>
                                    @foreach ($icons as $icon )
                                        <option value="{{$icon->id}}">{{$icon->icon_name}} </option>
                                    @endforeach
                            </select>
                            @if($errors->has('icon_id'))
                                <small class="text-red-500"> {{ $errors->first('icon_id') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <button type="submit"
                        class="w-full mt-8  text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 block">
                        <i class="fa-solid fa-paper-plane mr-2"></i> Send
                    </button>
                    <!-- button end -->

                </form>
                <!-- form end -->
            </div>

        </div>

    </div>
</section>

@stop
