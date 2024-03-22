
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
                    <div class="col-lg-8">

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="latin_name">Plant name in Latin</label>

                            <textarea id="latin_name" name="latin_name" rows="1" class="ckeditor form-control rounded-0">{{ old('latin_name') ?? '' }}</textarea>
                            @if ($errors->has('latin_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('latin_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="local_name">Plant name in local language <span class="text-danger">*</span></label>

                            <textarea id="local_name" name="local_name" rows="1" class="ckeditor form-control rounded-0">{{ old('local_name') ?? '' }}</textarea>
                            @if ($errors->has('local_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('local_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="indonesian_name">Plant name in Bahasa Indonesia</label>

                            <textarea id="indonesian_name" name="indonesian_name" rows="1" class="ckeditor form-control rounded-0">{{ old('indonesian_name') ?? '' }}</textarea>
                            @if ($errors->has('indonesian_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('indonesian_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="taxonomists">Taxonomists</label>

                            <textarea id="taxonomists" name="taxonomists" rows="1" class="ckeditor form-control rounded-0">{{ old('taxonomists') ?? '' }}</textarea>
                            @if ($errors->has('taxonomists'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('taxonomists') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="treatments">Treatments</label>
                            <textarea id="treatments" name="treatments" rows="1" class="ckeditor form-control rounded-0">{{ old('treatments') ?? '' }}</textarea>
                            @if ($errors->has('treatments'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('treatments') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="traditional_usage">Traditional Usage</label>

                            <textarea id="traditional_usage" name="traditional_usage" rows="1" class="ckeditor form-control rounded-0">{{ old('traditional_usage') ?? '' }}</textarea>
                            @if ($errors->has('traditional_usage'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('traditional_usage') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="known_phytochemical_consituents">Known Phytochemical Consituents</label>

                            <textarea id="known_phytochemical_consituents" name="known_phytochemical_consituents" rows="1" class="ckeditor form-control rounded-0">{{ old('known_phytochemical_consituents') ?? '' }}</textarea>
                            @if ($errors->has('known_phytochemical_consituents'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('known_phytochemical_consituents') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="village">Village</label>

                            <textarea id="village" name="village" rows="1" class="ckeditor form-control rounded-0">{{ old('village') ?? '' }}</textarea>
                            @if ($errors->has('village'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('village') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        
                        <div class="mb-3">
                            <label for="description">Status </label>
                            <select name="status" class="form-control" id="">
                                <option value="Draft" @if(old('status') == 'Draft' ) Selected @endif>Draft</option>
                                <option value="Publish" @if(old('status') == 'Publish') Selected @endif>Publish</option>
                            </select>
                            @if ($errors->has('status'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('status') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                    </div>
                    <!-- col end -->

                    <div class="col-lg-4">

                        <div class="row">

                            <div class="col-12 mb-3">
                                <label for="image_cover">Cover</label>
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('images/plants/00-single.jpg') }}" id="preview_image_cover" alt="Image empty" class="w-25">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="image_cover" class="custom-file-input" id="image_cover" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Select image</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!-- col end -->

                            <div class="col-12 mb-3">
                                <label for="image_daun">Daun</label>
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('images/plants/00-single.jpg') }}" id="preview_image_daun" alt="Image empty" class="w-25">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="image_daun" class="custom-file-input" id="image_daun" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Select image</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!-- col end -->

                            <div class="col-12 mb-3">
                                <label for="image_buah">Buah</label>
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('images/plants/00-single.jpg') }}" id="preview_image_buah" alt="Image empty" class="w-25">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="image_buah" class="custom-file-input" id="image_buah" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Select image</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!-- col end -->

                            <div class="col-12 mb-3">
                                <label for="image_pohon">Pohon</label>
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('images/plants/00-single.jpg') }}" id="preview_image_pohon" alt="Image empty" class="w-25">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="image_pohon" class="custom-file-input" id="image_pohon" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Select image</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!-- col end -->

                            <div class="col-12 mb-3">
                                <label for="image_bunga">Bunga</label>
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('images/plants/00-single.jpg') }}" id="preview_image_bunga" alt="Image empty" class="w-25">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="image_bunga" class="custom-file-input" id="image_bunga" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Select image</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!-- col end -->

                            <div class="col-12 mb-3">
                                <label for="image_batang">Batang</label>
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('images/plants/00-single.jpg') }}" id="preview_image_batang" alt="Image empty" class="w-25">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="image_batang" class="custom-file-input" id="image_batang" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Select image</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!-- col end -->

                            <div class="col-12 mb-3">
                                <label for="image_keseluruhan">Keseluruhan</label>
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('images/plants/00-single.jpg') }}" id="preview_image_keseluruhan" alt="Image empty" class="w-25">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="image_keseluruhan" class="custom-file-input" id="image_keseluruhan" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Select image</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!-- col end -->

                        </div>

                    </div>
                    <!-- col end -->
                    
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

    // cover
    $(document).ready(function (e) {
        $('#image_cover').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview_image_cover').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    // daun
    $(document).ready(function (e) {
        $('#image_daun').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview_image_daun').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    // buah
    $(document).ready(function (e) {
        $('#image_buah').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview_image_buah').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    // pohon
    $(document).ready(function (e) {
        $('#image_pohon').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview_image_pohon').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    // bunga
    $(document).ready(function (e) {
        $('#image_bunga').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview_image_bunga').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    // batang
    $(document).ready(function (e) {
        $('#image_batang').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview_image_batang').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    // keseluruhan
    $(document).ready(function (e) {
        $('#image_keseluruhan').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview_image_keseluruhan').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

</script>

@endpush
