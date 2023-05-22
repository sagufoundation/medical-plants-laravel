
@extends('admin.layouts.admin-app')
    @section('title')
    Icon Create - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')
<section>
    <div class="p-10 mt-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Add a new Icon</h2>
            <p class="mb-4 font-light">Please input any relevant information into the form bellow.</p>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <div class="md:w-2/3">
                <!-- form start -->

                <form class="space-y-4 md:space-y-6" method="POST" enctype="multipart/form-data" action="{{route('admin.icon.store')}}">
                    @csrf
                    <div>
                        <label for="icon_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Icon Name</label>
                        <input type="icon_name" name="icon_name" id="icon_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required="" value="{{ old('icon_name')}}" >
                            @if($errors->has('icon_name'))
                                <p class="text-red-900"> {{ $errors->first('icon_name') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="img_icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Icon Image</label>
                        <input type="file" name="icon_img" id="img_icon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required=""  >
                        @if($errors->has('icon_img'))
                            <p class="text-red-900"> {{ $errors->first('icon_img') }} </p>
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
