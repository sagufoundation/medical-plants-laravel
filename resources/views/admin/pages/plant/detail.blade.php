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

            </div>

          </div>
        </div>
      </section>

  </main><!-- End #main -->



@stop
