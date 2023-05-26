
@extends('admin.layouts.admin-app')
    @section('title')
    Contributor Create - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<section>
    <div class="p-10 mt-8 px-4 ml-64 lg:py-16 lg:px-6">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Add a new Contributor</h2>
            {{-- <p class="mb-4 font-light">Please input any relevant information into the form bellow.</p> --}}
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg border p-7">

            <div class="md:w-2/3">
                <!-- form start -->

                <form class="space-y-4 md:space-y-6" method="POST" enctype="multipart/form-data" action="{{route('admin.contributor.store')}}">
                    @csrf
                    <div>
                        <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                        <input type="full_name" name="full_name" id="full_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="{{ old('full_name')}}" >
                            @if($errors->has('full_name'))
                                <small class="text-red-500"> {{ $errors->first('full_name') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=""  value="{{ old('email')}}">
                            @if($errors->has('email'))
                                <small class="text-red-500"> {{ $errors->first('email') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="address" name="address" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="{{old('address')}}">

                            @if($errors->has('address'))
                                <small class="text-red-500"> {{ $errors->first('address') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                        <input type="city" name="city" id="city"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="{{old('city')}}">

                            @if($errors->has('city'))
                                <small class="text-red-500"> {{ $errors->first('city') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                        <input type="province" name="province" id="province"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="{{old('province')}}">

                            @if($errors->has('province'))
                                <small class="text-red-500"> {{ $errors->first('province') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="descriptions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descriptions</label>
                        <input type="descriptions" name="descriptions" id="descriptions"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="{{old('descriptions')}}">

                            @if($errors->has('descriptions'))
                                <small class="text-red-500"> {{ $errors->first('descriptions') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="status_contributor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Contributor</label>
                            <select name="status_contributor" id="status_contributor"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Choose </option>
                                    <option value="Publish">Publish </option>
                                    <option value="Review">Review </option>
                                    <option value="Draft">Draft </option>
                            </select>
                            @if($errors->has('status_contributor'))
                                <small class="text-red-500"> {{ $errors->first('status_contributor') }} </small>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Photo</label>
                        <input type="file" name="photo" id="treatments"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="">
                            @if($errors->has('photo'))
                                <small class="text-red-500"> {{ $errors->first('photo') }} </small>
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
