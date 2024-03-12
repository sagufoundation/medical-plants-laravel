
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
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" class="form-control rounded-0"
                                placeholder="write name of regency here">
                                @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('name') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="coordinates">Coordinates <span class="text-danger">*</span></label>
                                <input type="text" id="coordinates" name="coordinates" class="form-control rounded-0"
                                placeholder="example: -1.779,136.357 ">
                                @if ($errors->has('coordinates'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('coordinates') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="description">Description</label>

                                <textarea id="description" name="description" rows="1" class="ckeditor form-control rounded-0">{{ old('description') ?? '' }}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('description') }}</small>
                                    </span>
                                @endif
                            </div>
                            <!-- input item END -->

                        </div>
                        <div class="col-md-6">

                            

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="image" class="form-label d-block">Image </label>
                                <div class="mb-2">
                                    <img src="{{ asset('images/00.png') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail w-50">
                                </div>

                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="gambar" accept="image/*">
                                    <label class="custom-file-label" for="customFile">Select image</label>
                                </div>

                                @if ($errors->has('image'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('image') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="description">Status </label>
                                <select name="status" class="form-control" id="">
                                    <option value="Draft" value="" hidden>Select</option>
                                    <option value="Publish">Publish</option>
                                    <option value="Draft">Draft</option>
                                </select>

                                @if ($errors->has('status'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('status') }}</small>
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

@push('script-footer')
<script src="{{ asset('assets/admin/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    CKEDITOR.config.height='100px';

    $(document).ready(function (e) {
        $('#gambar').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });
</script>

@endpush
