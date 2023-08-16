
@extends('admin.layouts.admin-app')
    @section('title')
    Plant Create - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<main id="main" class="main mb-5">
    <div class="pagetitle">
      <h1>Plants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Plants</a></li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

<<<<<<< HEAD
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-0">Plants</h5>
                <p>Please input any relevant information into the form bellow.</p>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data" action="{{route('admin.plant.store')}}">
                @csrf
                <div class="col-6">
                    <div class="col-md-12 mb-3">
                        <label for="local_name" class="form-label">Local Name</label>
                        <input type="text" name="local_name" value="{{old('local_name')}}" class="form-control" id="local_name">
                        @if($errors->has('local_name'))
                            <p class="text-danger"> {{ $errors->first('local_name') }} </p>
                        @endif
=======
                <form class="space-y-4 md:space-y-6" method="POST" enctype="multipart/form-data" action="{{route('admin.plant.store')}}">
                    @csrf
                    <div>
                        <label for="local_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Name</label>
                        <input type="local_name" name="local_name" id="local_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="{{ old('local_name')}}" >
                            @if($errors->has('local_name'))
                                <p class="text-red-900"> {{ $errors->first('local_name') }} </p>
                            @endif
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
                    </div>

<<<<<<< HEAD
                    <div class="col-md-12 mb-3">
                        <label for="taxonomists" class="form-label">Taxonomists</label>
                        <input type="text" name="taxonomists" value="{{old('taxonomists')}}" class="form-control" id="taxonomists">
                        @if($errors->has('taxonomists'))
                            <p class="text-danger"> {{ $errors->first('taxonomists') }} </p>
                        @endif
=======
                    <div>
                        <label for="taxonomists" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Taxonomists</label>
                        <input type="taxonomists" name="taxonomists" id="taxonomists"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=""  value="{{ old('taxonomists')}}">
                            @if($errors->has('taxonomists'))
                                <p class="text-red-900"> {{ $errors->first('taxonomists') }} </p>
                            @endif
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
                    </div>

<<<<<<< HEAD
                    <div class="col-md-12 mb-3">
                        <label for="treatments" class="form-label">Treatments</label>
                        <input type="text" class="form-control" id="treatments" name="treatments" value="{{old('treatments')}}">
                        @if($errors->has('treatments'))
                            <p class="text-danger"> {{ $errors->first('treatments') }} </p>
                        @endif
=======
                    <div>
                        <label for="treatments" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treatments</label>
                        <input type="treatments" name="treatments" id="treatments"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="{{old('treatments')}}">

                            @if($errors->has('treatments'))
                                <p class="text-red-900"> {{ $errors->first('treatments') }} </p>
                            @endif
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status" id="status">
                            <option selected>Select one</option>
                            <option value="Publish">Publish</option>
                            <option value="Review">Review</option>
                            <option value="Draft">Draft</option>
                        </select>
                        @if($errors->has('status'))
                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                        @endif
                    </div>

<<<<<<< HEAD

                    <div class="col-md-12 mb-3">
                        <label for="cover_picture" class="form-label">Photo</label>
                        <input type="file" name="cover_picture" class="form-control" id="cover_picture">
=======
                    <div>
                        <label for="cover_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover Picture</label>
                        <input type="file" name="cover_picture" id="cover_picture"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=""  >
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
                        @if($errors->has('cover_picture'))
                            <p class="text-danger"> {{ $errors->first('cover_picture') }} </p>
                         @endif
                    </div>

<<<<<<< HEAD

                    <div class="col-md-12 mb-3">
                        <label for="gallery_picture" class="form-label">Gallery Picture</label>
                        <input type="file" name="gallery_picture" class="form-control" id="gallery_picture">
=======
                    <div>
                        <label for="gallery_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gallery Picture</label>
                        <input type="file" name="gallery_picture" id="gallery_picture"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=""  >
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
                        @if($errors->has('gallery_picture'))
                            <p class="text-danger"> {{ $errors->first('gallery_picture') }} </p>
                         @endif
                    </div>

                    <div class="mb-3">
                        <label for="id_location" class="form-label">Location</label>
                        <select class="form-select" name="id_location" id="id_location">
                            <option selected>Select one</option>
                            @foreach ($locations as $location)
                                <option value="{{$location->id}}"> {{$location->tribes}} </option>
                            @endforeach
                        </select>
                        @if($errors->has('id_location'))
                             <p class="text-danger"> {{ $errors->first('id_location') }} </p>
                        @endif
                    </div>

<<<<<<< HEAD
                    <div class="mb-3">
                        <label for="id_contributor" class="form-label">Location</label>
                        <select class="form-select" name="id_contributor" id="id_contributor">
                            <option selected>Select one</option>
                            @foreach ($contributors as $c)
                                <option value="{{$c->id}}"> {{$c->full_name}} </option>
                            @endforeach
                        </select>
                        @if($errors->has('id_contributor'))
                             <p class="text-danger"> {{ $errors->first('id_contributor') }} </p>
                        @endif
=======
                    <div>
                        <label for="id_province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                            <select name="id_province" id="id_province"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Choose </option>
                                    @foreach ($provinces as $province)
                                        <option value="{{$province->id}}"> {{$province->name}} </option>
                                    @endforeach
                            </select>
                            @if($errors->has('id_province'))
                                <p class="text-red-900"> {{ $errors->first('id_province') }} </p>
                            @endif
                    </div>
                    <!-- input item end -->

                    <div>
                        <label for="id_location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                            <select name="id_location" id="id_location"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Choose </option>
                                    @foreach ($locations as $location)
                                        <option value="{{$location->id}}"> {{$location->tribes}} </option>
                                    @endforeach
                            </select>
                            @if($errors->has('id_location'))
                                <p class="text-red-900"> {{ $errors->first('id_location') }} </p>
                            @endif
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
                    </div>


                    <div class="mb-3">
                        <button class="btn btn-success px-5" type="submit"> Save <i class="fa-solid fa-floppy-disk"></i></button>
                    </div>
                </div>
              </form>
































































              </div>
            </div>

          </div>
        </div>
      </section>

  </main><!-- End #main -->



@stop
