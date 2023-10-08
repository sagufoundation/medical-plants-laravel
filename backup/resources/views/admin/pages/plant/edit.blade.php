
@extends('admin.layouts.admin-app')
    @section('title')
    Plant Edit - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')
<main id="main" class="main mb-5">
    <div class="pagetitle">
      <h1>Plants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Plants</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

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
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="taxonomists" class="form-label">Taxonomists</label>
                        <input type="text" name="taxonomists" value="{{old('taxonomists')}}" class="form-control" id="taxonomists">
                        @if($errors->has('taxonomists'))
                            <p class="text-danger"> {{ $errors->first('taxonomists') }} </p>
                        @endif
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="treatments" class="form-label">Treatments</label>
                        <input type="text" class="form-control" id="treatments" name="treatments" value="{{old('treatments')}}">
                        @if($errors->has('treatments'))
                            <p class="text-danger"> {{ $errors->first('treatments') }} </p>
                        @endif
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


                    <div class="col-md-12 mb-3">
                        <label for="cover_picture" class="form-label">Photo</label>
                        <input type="file" name="cover_picture" class="form-control" id="cover_picture">
                        @if($errors->has('cover_picture'))
                            <p class="text-danger"> {{ $errors->first('cover_picture') }} </p>
                         @endif
                    </div>


                    <div class="col-md-12 mb-3">
                        <label for="gallery_picture" class="form-label">Gallery Picture</label>
                        <input type="file" name="gallery_picture" class="form-control" id="gallery_picture">
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

                    <div class="mb-3">
                        <label for="id_contributor" class="form-label">Contributor</label>
                        <select class="form-select" name="id_contributor" id="id_contributor">
                            <option selected>Select one</option>
                            @foreach ($contributors as $contributor)
                                <option value="{{$contributor->id}}"> {{$contributor->full_name}} </option>
                            @endforeach
                        </select>
                        @if($errors->has('id_contributor'))
                             <p class="text-danger"> {{ $errors->first('id_contributor') }} </p>
                        @endif
                    </div>


                    <div class="mb-3">
                        <button class="btn btn-success px-5" type="submit"> Save <i class="fa-solid fa-floppy-disk"></i></button>
                    </div>
                </div>
              </form>




            </div>

          </div>
        </div>
      </section>

  </main><!-- End #main -->



@stop
