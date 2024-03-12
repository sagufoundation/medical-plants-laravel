
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('dashboard.'.Request::segment(2).'.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-lg-6">

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="local_name">Indonesia Name <span class="text-danger">*</span></label>
                            <textarea id="local_name" name="local_name" rows="1" class="ckeditor form-control rounded-0" placeholder="write Indonesia Name here"> {{ $data->local_name}} </textarea>
                            @if ($errors->has('local_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('local_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="indonesian_name">Indonesia Name</label>
                            <textarea id="indonesian_name" name="indonesian_name" rows="1" class="ckeditor form-control rounded-0" placeholder="write Indonesia Name here"> {{ $data->indonesian_name}} </textarea>
                            @if ($errors->has('indonesian_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('indonesian_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="latin_name">Latin Name</label>

                            <textarea id="latin_name" name="latin_name" rows="1" class="ckeditor form-control rounded-0" placeholder="write Indonesia Name here"> {{ $data->latin_name}} </textarea>
                            @if ($errors->has('latin_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('latin_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="taxonomists">Taxonomists</label>

                            <textarea id="taxonomists" name="taxonomists" rows="1" class="ckeditor form-control rounded-0" placeholder="write Indonesia Name here"> {{ $data->taxonomists}} </textarea>
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

                            <textarea id="treatments" name="treatments" rows="1" class="ckeditor form-control rounded-0" placeholder="write Indonesia Name here"> {{ $data->treatments}} </textarea>
                            @if ($errors->has('treatments'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('treatments') }}</small>
                                </span>
                            @endif
                        </div>                        
                        <!-- input item START -->

                        <!-- input item END -->
                        <div class="mb-3">
                            <label for="traditional_usage">Traditional Usage</label>

                            <textarea id="traditional_usage" name="traditional_usage" rows="1" class="ckeditor form-control rounded-0" placeholder="write Indonesia Name here"> {{ $data->traditional_usage}} </textarea>
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

                            <textarea id="known_phytochemical_consituents" name="known_phytochemical_consituents" rows="1" class="ckeditor form-control rounded-0" placeholder="write Indonesia Name here"> {{ $data->known_phytochemical_consituents}} </textarea>
                            @if ($errors->has('known_phytochemical_consituents'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('known_phytochemical_consituents') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                    </div>
                    <div class="col-lg-6">

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="gambar1" class="form-label d-block">Thumbnail </label>
                            <div class="mb-2">
                                @if (!$data->cover_picture)
                                    <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Gambar" id="preview-gambar1" class="img-thumbnail w-50">
                                    @else
                                    <img src="{{ asset('images/plants/' . $data->cover_picture) }}" id="preview-gambar1" class="img-thumbnail w-50">
                                @endif
                            </div>
                            <!-- input item END -->
                            
                            <!-- input item START -->
                            <div class="custom-file">
                                <input type="file" name="cover_picture" class="custom-file-input" id="gambar1" accept="image/*">
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
                            <label for="2" class="form-label d-block">Gallery </label>
                            <div class="mb-2">
                                @if (!$data->gallery_picture)
                                    <img src="{{ asset('images/plants/00-gallery.jpg') }}" alt="Gambar" id="preview-gambar2" class="img-thumbnail img-fluid">
                                    @else
                                    <img src="{{ asset('images/plants/' . $data->gallery_picture) }}" id="preview-gambar2" class="img-thumbnail img-fluid">
                                @endif

                            </div>

                            <div class="custom-file">
                                <input type="file" name="gallery_picture" class="custom-file-input" id="gambar2" accept="image/*">
                                <label class="custom-file-label" for="customFile">Select image</label>
                            </div>

                            @if ($errors->has('gallery_picture'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('gallery_picture') }}</small>
                                </span>
                            @endif

                        </div>
                        <!-- input item END -->

                        <div class="mb-3">
                            <label for="id_regency">Regency {{sizeof($regencies)<1?'(Data regencies not yet available)':''}}</label>
                            <select name="id_regency" class="form-control" id="id_regency">
                                <option value="" hidden>Select</option>
                                @foreach ($regencies as $regency )
                                    <option value="{{ $regency->id }}" @if($data->id_regency == $regency->id) selected="selected" @endif> {{ $regency->name }} </option>
                                @endforeach
                            </select>
                            @if ($errors->has('regency'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('regency') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <div class="mb-3">
                            <label for="id_tribe">Tribe {{sizeof($tribes)<1?'(Data tribes not yet available)':''}}</label>
                            <select name="id_tribe" class="form-control" id="id_tribe">
                                <option value="" hidden>Select</option>
                                @foreach ($tribes as $tribe )
                                    <option value="{{ $tribe->id }}" @if($data->id_tribe == $tribe->id) selected="selected" @endif > {{ $tribe->tribe_name }} </option>
                                @endforeach
                            </select>
                            @if ($errors->has('tribe'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('tribe') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <div class="mb-3">
                            <label for="id_contributor">Contributor </label>
                            <select name="id_contributor" class="form-control" id="id_contributor">
                                <option hidden></option>
                                @foreach ($countributors as $countributor )
                                <option value="{{ $countributor->id }}" @if($data->id_contributor == $countributor->id) selected="selected" @endif >
                                    {{ $countributor->full_name }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_contributor'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('id_contributor') }}</small>
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

    CKEDITOR.config.height='100px';
    $(document).ready(function (e) {
        $('#gambar1').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-gambar1').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    $(document).ready(function (e) {
        $('#gambar2').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-gambar2').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

</script>

@endpush
