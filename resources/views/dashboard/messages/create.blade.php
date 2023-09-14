
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="row">
                        <div class="col-lg-6">           
                            
                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control rounded-0" placeholder="write adventure title here">

                                @if ($errors->has('title'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('title') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->         
                            
                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" rows="3" class="form-control rounded-0" placeholder="write some description in one or two sentences"></textarea>

                                @if ($errors->has('description'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('description') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->
                        </div>
                    </div>   
                    
                    <button type="submit" class="btn btn-primary rounded-0">
                        <i class="fa-solid fa-plus-square"></i> Submit
                    </button>
                    
                    <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'') }}" class="btn btn-outline-dark rounded-0 border-0">
                        <i class="fa-solid fa-times-square"></i> Cancle
                    </a>

                </form>
                
            </div>
            <!-- .card-body END -->
        </div>
        <!-- .card END -->
    </div>
    <!-- .col END -->
</div>
<!-- .row END -->
    
@endsection