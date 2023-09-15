
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
                            <label for="tribes">Tribes <span class="text-danger">*</span></label>
                            <input type="text" id="tribes" name="tribes" class="form-control rounded-0" placeholder="write tribes here"
                                value="{!! $data->tribes ?? '' !!}">

                            @if ($errors->has('tribes'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('tribes') }}</small>
                                </span>
                            @endif

                        </div>
                        <!-- input item END -->



                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="desc">Description </label>
                            <textarea id="desc" name="desc" rows="3" class="ckeditor form-control rounded-0" placeholder="write some description in one or two sentences">{!! $data->desc ?? '' !!}</textarea>

                            @if ($errors->has('desc'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('desc') }}</small>
                                </span>
                            @endif

                        </div>
                        <!-- input item END -->


                    </div>

                    <div class="col-lg-6">

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="link">Link <span class="text-danger">*</span></label>
                            <input type="text" id="link" name="link" class="form-control rounded-0" placeholder="write link here"
                                value="{!! $data->link ?? '' !!}">

                            @if ($errors->has('link'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('link') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="long">Long <span class="text-danger">*</span></label>
                            <input type="text" id="long" name="long" class="form-control rounded-0" placeholder="write long here"
                                value="{!! $data->long ?? '' !!}">

                            @if ($errors->has('long'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('long') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="lat">Lat <span class="text-danger">*</span></label>
                            <input type="text" id="lat" name="lat" class="form-control rounded-0" placeholder="write lat here"
                                value="{!! $data->lat ?? '' !!}">

                            @if ($errors->has('lat'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('lat') }}</small>
                                </span>
                            @endif

                        </div>
                        <!-- input item END -->

                        <div class="mb-3">
                            <label for="description">Icons </label>
                            <select name="icon" class="form-control" id="icon">
                                @foreach ($icons as $icon )
                                    <option value="{{ $data->icon_id }}"
                                        @if($data->icon_id == $icon->id)selected="selected"@endif >
                                        {{ $icon->icon_name }}
                                </option>
                                @endforeach
                            </select>

                            @if ($errors->has('icon'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('icon') }}</small>
                                </span>
                            @endif

                        </div>

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
    CKEDITOR.config.height='200px';

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

