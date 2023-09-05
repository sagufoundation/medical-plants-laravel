@extends('admin.layouts.admin-app')
    @section('title')
    Plant Detail - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Plants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Plants</a></li>
          <li class="breadcrumb-item active">Detail</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-0">Plants</h5>

                <table>
                    <tr>
                        <td width="300"> Local Name </td>
                        <th>   {{ $data->local_name }} </th>
                    </tr>
                    <tr>
                        <td width="300"> Taxonomists </td>
                        <th>    {{ $data->taxonomists }} </th>
                    </tr>
                    <tr>
                        <td width="300"> Treatments </td>
                        <th>   {{ $data->treatments }} </th>
                    </tr>
                    <tr>
                        <td width="300"> Status </td>
                        <th>    {{$data->status}} </th>
                    </tr>
                    <tr>
                        <td width="300">  Picture Cover </td>
                        <th>   <img  alt=" Picture Cover" src="{{ url($data->cover_picture) }}" width="300"> </th>
                    </tr>
                    <tr>
                        <td width="300"> Gallery Picture </td>
                        <th>   <img  alt="Gallery Picture" src="{{ url($data->gallery_picture) }}" width="300"> </th>
                    </tr>
                </table>

<<<<<<< HEAD
=======
                    <div class="mb-5">
                        <label for="local_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Taxonomists</label>
                        {{ $data->taxonomists }}
                    </div>
                    <!-- item end -->

                    <div class="mb-5">
                        <label for="local_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treatments</label>
                        {{ $data->treatments }}
                    </div>
                    <!-- item end -->

                    <div class="mb-5">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            {{$data->status}}


                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="cover_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cover Picture</label>
                        <img src="{{ url($data->cover_picture) }}" class="mb-5" alt="{{ $data->local_name }}" width="250px">
                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="gallery_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gallery Picture</label>
                        <img src="{{ url($data->gallery_picture) }}" class="mb-5 border shadow" alt="{{ $data->gallery_picture }}" width="550px">
                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="id_location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                        {{ $data->province->name }}
                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="id_location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        {{ $data->location->tribes }}
                    </div>
                    <!-- input item end -->

                    <div class="mb-5">
                        <label for="id_contributor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contributor</label>
                        {{ $data->contributor->full_name }}
                    </div>
                    <!-- input item end -->


                <!-- form end -->
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
            </div>

          </div>
        </div>
      </section>

  </main><!-- End #main -->



@stop
