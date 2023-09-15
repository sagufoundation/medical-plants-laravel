
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                    <div class="row">
                        <div class="col-lg-6">

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="icon_name">Icon Name <span class="text-danger">*</span></label>
                                <input type="text" id="icon_name" name="icon_name" class="form-control rounded-0" placeholder="write icon_name here"
                                    value="{!! $data->icon_name ?? '' !!}">

                                @if ($errors->has('icon_name'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('icon_name') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->

                            <div class="mb-3">
                                <label for="description">Status </label>
                                <select name="status" class="form-control" id="">

                                    <option value="Publish" @if(old('status', $data->status) == 'Publish') Selected @endif>Publish</option>
                                    <option value="Draft" @if(old('status', $data->status) ==   'Draft' ) Selected @endif>Draft</option>
                                </select>

                                @if ($errors->has('status'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('status') }}</small>
                                    </span>
                                @endif

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label d-block">Image </label>
                                <div class="mb-2">
                                    @if (!$data->icon_img)
                                    <img src="{{ asset('images/tour_events/00.png') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid" style="width:200px">
                                    @else
                                    <img src="{{ asset($data->icon_img) }}" id="preview-gambar" class="img-thumbnail img-fluid" style="width:200px">
                                    @endif
                                </div>


                                <div class="custom-file">
                                    <input type="file" name="icon_img" class="custom-file-input" id="gambar" accept="image/*">
                                    <small class="text-muted mt-2 d-block">Select a new image from your computer</small>
                                    <label class="custom-file-label" for="customFile">Select image</label>
                                </div>

                                @if ($errors->has('icon_img'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('icon_img') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->

                            <!-- input item START -->

                            <!-- input item END -->
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-0">
                        <i class="fa-solid fa-save"></i> Save
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
    CKEDITOR.config.height='400px';

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

