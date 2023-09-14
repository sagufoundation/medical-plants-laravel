
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
                            <input type="text" id="name" name="name" class="form-control rounded-0" placeholder="write username here">
                            <input type="hidden" id="job_title" name="job_title" class="form-control rounded-0" value="Administrator on www.gotravpapua.com">
                            @if ($errors->has('name'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('name') }}</small>
                                </span>
                            @endif

                        </div>
                        <!-- input item END -->



                        <div class="mb-3">
                            <label for="description">Email <span class="text-danger">*</span></label>
                            <input type="email" id="title" name="email" class="form-control rounded-0" placeholder="write email here">
                            @if ($errors->has('email'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('email') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="description">Password <span class="text-danger">*</span></label>
                            <input type="password" id="password" name="password" class="form-control rounded-0" placeholder="write password here">
                            @if ($errors->has('password'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('password') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation">Confirmation Password <span class="text-danger">*</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control rounded-0" placeholder="write confirmation password  here">
                            @if ($errors->has('password_confirmation'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('password_confirmation') }}</small>
                                </span>
                            @endif
                        </div>


                        <div class="mb-3">
                            <label for="description">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control" id="">
                                <option value="" hidden>Select</option>
                                <option value="Publish">Publish</option>
                                <option value="Draft">Draft</option>
                            </select>

                            @if ($errors->has('status'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('status') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="roles">Roles <span class="text-danger">*</span></label>
                            <select name="roles" class="form-control" id="">
                                @foreach ($roles as $role )
                                    @if ($role->display_name === "Administrator")
                                        <option value="{{ $role->id }}" selected>{{ $role->display_name }}</option>
                                    @else
                                    @endif
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <!-- input item START -->
                        <div class="mb-3">
                            <label for="gambar" class="form-label d-block">Image</label>
                            <div class="mb-2">
                                <img src="{{ asset('images/tour_packages/00.png') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                            </div>

                            <div class="custom-file">
                                <input type="file" name="picture" class="custom-file-input" id="gambar" accept="image/*">
                                <small class="text-muted mt-2 d-block">Select a new image from your computer</small>
                                <label class="custom-file-label" for="customFile">Select image</label>
                            </div>

                            @if ($errors->has('picture'))
                            <span class="text-danger" role="alert">
                                    <small>{{ $errors->first('picture') }}</small>
                                </span>
                            @endif

                        </div>
                        <!-- input item END -->

                        <!-- input item START -->

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
