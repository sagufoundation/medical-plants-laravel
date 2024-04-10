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

                    <!-- row start -->    
                    <div class="row">
                        
                        <!-- .col start -->
                        <div class="col-lg-8">

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="full_name">Full Name <span class="text-danger">*</span></label>
                                <input type="text" id="full_name" name="full_name" class="form-control rounded-0" value="{{ old('full_name') }}">
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
                                <input type="email" id="email" name="email" class="form-control rounded-0" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('email') }}</small>
                                    </span>
                                @endif
                            </div>
                            <!-- input item END -->
                            
                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <textarea id="address" name="address" rows="2" class="form-control rounded-0"></textarea>
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
                                <textarea id="descriptions" name="descriptions" rows="3" class="form-control rounded-0"></textarea>
                                @if ($errors->has('descriptions'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('descriptions') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="status">Status </label>
                                <select name="status" class="form-control" id="">
                                    <option value="Draft" value="" hidden></option>
                                    <option value="Publish" @if(old('status') == 'Publish') selected @endif>Publish</option>
                                    <option value="Draft" @if(old('status') == 'Draft') selected @endif>Draft</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('status') }}</small>
                                    </span>
                                @endif

                            </div>
                            <!-- input item END -->

                        </div>
                        <!-- .col end -->

                        <!-- .col start -->
                        <div class="col-lg-4">

                            <!-- input item START -->
                            <div class="mb-3">
                                <label for="photo" class="form-label d-block">Photo</label>
                                <div class="mb-2">
                                    <img src="{{ asset('images/00.png') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid w-100">
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

                        </div>
                        <!-- .col end -->

                    </div>
                    <!-- .row end -->
                    
                    <!-- row start -->
                    <div class="row">
                        <div class="col">
                            <x-submit-button />
                            <x-close-button/>
                        </div>
                    </div> 
                    <!-- .row end --> 

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
