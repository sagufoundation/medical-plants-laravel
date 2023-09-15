
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('dashboard.'.Request::segment(2).'.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-6">

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="local_name">Local Name <span class="text-danger">*</span></label>
                            <input type="text" id="local_name" name="local_name" class="form-control rounded-0"
                            placeholder="write  Local Name here">
                            @if ($errors->has('local_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('local_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="indonesian_name">Indonesia Name <span class="text-danger">*</span></label>
                            <input type="text" id="indonesian_name" name="indonesian_name" class="form-control rounded-0"
                            placeholder="write Indonesia Name here">
                            @if ($errors->has('indonesian_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('indonesian_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="latin_name">Latin Name <span class="text-danger">*</span></label>
                            <input type="text" id="latin_name" name="latin_name" class="form-control rounded-0"
                            placeholder="write Latin Name here">
                            @if ($errors->has('latin_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('latin_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="taxonomists">Taxonomists <span class="text-danger">*</span></label>
                            <input type="text" id="taxonomists" name="taxonomists" class="form-control rounded-0"
                            placeholder="write Taxonomists  here">
                            @if ($errors->has('taxonomists'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('taxonomists') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="treatments">Treatments <span class="text-danger">*</span></label>
                            <input type="text" id="treatments" name="treatments" class="form-control rounded-0"
                            placeholder="write Treatments  here">
                            @if ($errors->has('treatments'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('treatments') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <div class="mb-3">
                            <label for="traditional_usage">Traditional Usage <span class="text-danger">*</span></label>
                            <input type="text" id="traditional_usage" name="traditional_usage" class="form-control rounded-0"
                            placeholder="write Traditional Usage  here">
                            @if ($errors->has('traditional_usage'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('traditional_usage') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <!-- input item END -->
                        <div class="mb-3">
                            <label for="known_phytochemical_consituents">Known Phytochemical Consituents <span class="text-danger">*</span></label>
                            <input type="text" id="known_phytochemical_consituents" name="known_phytochemical_consituents" class="form-control rounded-0"
                            placeholder="write Known Phytochemical Consituents here">
                            @if ($errors->has('known_phytochemical_consituents'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('known_phytochemical_consituents') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->


                        <!-- input item START -->
                        {{-- <div class="mb-3">
                            <label for="description">Body </label>
                            <textarea id="description" name="body" rows="8" class="ckeditor form-control rounded-0" placeholder="Type..."></textarea>

                            @if ($errors->has('body'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('body') }}</small>
                                </span>
                            @endif

                        </div> --}}
                        <!-- input item END -->

                        {{-- <div class="mb-3">
                            <label for="description">Description </label>
                            <textarea id="description" name="description" rows="2" class="ckeditor form-control rounded-0" placeholder="write some description in one or two sentences"></textarea>

                            @if ($errors->has('description'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('description') }}</small>
                                </span>
                            @endif

                        </div> --}}

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="contributor">Contributor  <span class="text-danger">*</span></label>
                                    <select name="contributor" class="form-control" id="contributor">
                                        <option value="" hidden>Select</option>
                                        @foreach ($countributors as $countributor )
                                            <option value="{{ $countributor->id }}">{{ $countributor->full_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('contributor'))
                                    <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('contributor') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="location">Location  <span class="text-danger">*</span></label>
                                    <select name="location" class="form-control" id="location">
                                        <option value="" hidden>Select</option>
                                        @foreach ($locations as $location )
                                            <option value="{{ $location->id }}">{{ $location->tribes }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('location'))
                                    <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('location') }}</small>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                        <label for="province">Province  <span class="text-danger">*</span></label>
                                        <select name="province" class="form-control" id="province">
                                            <option value="" hidden>Select</option>
                                            @foreach ($provinces as $province )
                                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('province'))
                                        <span class="text-danger" role="alert">
                                                <small>{{ $errors->first('province') }}</small>
                                            </span>
                                        @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="description">Status  <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" id="">

                                        <option value="Publish">Publish</option>
                                        <option value="Draft" selected>Draft</option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('status') }}</small>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-lg-6">

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="gambar" class="form-label d-block">Thumbnail </label>
                            <div class="mb-2">
                                <img src="{{ asset('images/00.png') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                            </div>

                            <div class="custom-file">
                                <input type="file" name="cover_picture" class="custom-file-input" id="gambar" accept="image/*">
                                <small class="text-muted mt-2 d-block">Select a new image from your computer</small>
                                <label class="custom-file-label" for="customFile">Select image</label>
                            </div>

                            @if ($errors->has('cover_picture'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('cover_picture') }}</small>
                                </span>
                            @endif

                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="gambar" class="form-label d-block">Gallery </label>
                            <div class="mb-2">
                                <img src="{{ asset('images/00.png') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="gallery_picture" class="custom-file-input" id="gambar" accept="image/*">
                                <small class="text-muted mt-2 d-block">Select a new image from your computer</small>
                                <label class="custom-file-label" for="customFile">Select image</label>
                            </div>

                            @if ($errors->has('gallery_picture'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('gallery_picture') }}</small>
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
    CKEDITOR.config.height='400px';
    $(document).ready(function (e) {
         ('#gambar').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });
</script>

@endpush
