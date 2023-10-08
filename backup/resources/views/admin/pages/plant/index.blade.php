
@extends('admin.layouts.admin-app')
    @section('title')
    Plant {{$judul}} - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<main id="main" class="main mb-5">
    <div class="pagetitle">
      <h1>Plants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Plants</a></li>
          <li class="breadcrumb-item active">{{$judul}} </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-0">Plants</h5>
                {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas minima repudiandae cumque enim harum aliquid quis provident quam nobis veniam.</p> --}}
               <div class="p-3">
                <a href="{{route('admin.plant.create')}}" class="btn btn-success p-2" > <i class="bi bi-plus"></i> Add Data Plant</a>
               </div>
                <!-- Table with stripped rows -->
                <!-- <table class="table datatable  table-bordered"> -->
                <table class="table table-hover datatable" >
                  <thead>
                    <tr class="bg-success text-white">
                      <th class=" text-center" scope="col">#</th>
                      <th class=" text-center" scope="col">Plant's Picture</th>
                      <th class=" text-center" scope="col">Local Name</th>
                      <th class=" text-center" scope="col">Contributor</th>
                      <th class=" text-center" scope="col">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0 @endphp
                    @foreach ($all as $data )
                    <tr>
                      <th class="text-center" scope="row">{{++$i}}</th>
                      <td class="text-center">
                        @if ($data->cover_picture == null)
                            <img class="w-8 h-8" src="/assets/img/plant.png" alt="Plant's image" width="40px" class="">
                        @else
                            <a href="{{ route('admin.plant.show',$data->id)}}" class="shadow">
                                <img src="{{ url($data->cover_picture) }}" alt="Plant's image" width="40px" class="">
                            </a>
                         @endif
                      </td>
                      <td class="text-center"> {{$data->local_name}}</td>
                      <td class="text-center"> {{$data->full_name}} </td>
                      <td>
                        <a href="{{ route('admin.plant.show',$data->id)}}" class="btn btn-success"> <i class="bi bi-eye-fill"></i> </a>
                        <a href="{{ route('admin.plant.edit', $data->id)}}" class="btn btn-success"> <i class="bi bi-pencil-fill"></i> </a>
                        <form action="{{ route('admin.plant.destroy', $data->id) }}"  class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-success"><i class="bi bi-trash-fill"></i> </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
      </section>

  </main><!-- End #main -->



@stop
