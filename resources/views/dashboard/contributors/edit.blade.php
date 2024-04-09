
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
                            <label for="full_name">Full Name <span class="text-danger">*</span></label>
                            <input type="text" id="full_name" name="full_name" class="form-control rounded-0"
                            value="{{$data->full_name}}" placeholder="">
                            @if ($errors->has('full_name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('full_name') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" id="email" name="email" class="form-control rounded-0" placeholder=""
                            value="{{$data->email}}">
                            @if ($errors->has('email'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('email') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        {{-- <!-- input item START -->
                        <div class="mb-3">
                            <label for="city">City <span class="text-danger">*</span></label>
                            <input type="text" id="city" name="city" class="form-control rounded-0"
                            placeholder="write city here" value="{{$data->city}}">
                            @if ($errors->has('city'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('city') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="province">Province <span class="text-danger">*</span></label>
                            <input type="text" id="province" name="province" class="form-control rounded-0"
                            placeholder="write province here" value="{{$data->province}}">
                            @if ($errors->has('province'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('province') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END --> --}}
                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <textarea id="address" name="address" rows="2" class="form-control rounded-0" placeholder="">{{$data->address}}</textarea>
                            @if ($errors->has('address'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('address') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item END -->

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea id="descriptions" name="descriptions" rows="3" class="form-control rounded-0" placeholder="">{{ $data->descriptions }}</textarea>

                            @if ($errors->has('descriptions'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('descriptions') }}</small>
                                </span>
                            @endif

                        </div>
                        <!-- input item END -->

                        <div class="mb-3">
                            <label for="status">Status </label>
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
                            <label for="photo" class="form-label d-block">Photo</label>
                            <div class="mb-2">
                                @if (!$data->photo)
                                <img src="{{ asset('images/00.png') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid" >
                                @else
                                <img src="{{ asset('images/team/'.$data->photo) }}" id="preview-gambar" class="img-thumbnail img-fluid" >
                                @endif
                            </div>

                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="gambar" accept="image/*">
                                <small class="text-muted mt-2 d-block">Select a new image from your computer</small>
                                <label class="custom-file-label" for="customFile">Select image</label>
                            </div>

                            @if ($errors->has('photo'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('photo') }}</small>
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
<script type="text/javascript">


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
