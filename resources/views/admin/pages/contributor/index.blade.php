
@extends('admin.layouts.admin-app')
    @section('title')
    Contributor {{$judul}} - Admin Traditional Medicinal Plants in Papua
    @endsection
@section('content')

<main id="main" class="main mb-5">
    <div class="pagetitle">
      <h1>Contributor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Contributor</a></li>
          <li class="breadcrumb-item active">{{$judul}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
</main><!-- End #main -->


@stop
