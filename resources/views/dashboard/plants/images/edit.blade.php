
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('dashboard.'.Request::segment(2).'.update_image_cover', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row">
                    
                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                @php
                                    if(Request::segment(3) == 'cover') { $imageSegment = $data->image_cover; }    
                                    if(Request::segment(3) == 'daun') { $imageSegment = $data->image_daun; }    
                                    if(Request::segment(3) == 'buah') { $imageSegment = $data->image_buah; }    
                                    if(Request::segment(3) == 'pohon') { $imageSegment = $data->image_pohon; }    
                                    if(Request::segment(3) == 'bunga') { $imageSegment = $data->image_bunga; }    
                                    if(Request::segment(3) == 'batang') { $imageSegment = $data->image_batang; }    
                                    if(Request::segment(3) == 'keseluruhan') { $imageSegment = $data->image_keseluruhan; }    
                                @endphp
                                <div class="font-weight-bold text-capitalize">{{ Request::segment(3) }}</div>
                                    @if (empty($imageSegment))
                                    <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                    @else
                                    <img src="{!! asset('images/plants/' . $data->id .'/'.$imageSegment) !!}" alt="{!! asset('images/plants/' . $data->id .'/'.$imageSegment) !!}" class="border shadow w-100" id="preview-gambar">
                                    <div class="position-absolute top-0 start-0">
                                        <a href="{{ url('dashboard/plants/'.Request::segment(3).'/'.$data->id.'/trash') }}" class="btn btn-sm btn-outline-dark px-1 py-0 rounded-0"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                    @endif
                                

                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="gambar" accept="image/*">
                                    <label class="custom-file-label" for="customFile">Select image</label>
                                </div>

                                @if ($errors->has('image'))
                                <span class="text-danger" role="alert">
                                        <small>{{ $errors->first('image') }}</small>
                                    </span>
                                @endif

                            </div> <!-- col end -->
                            
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <input type="hidden" name="segment3" value="{{ Request::segment(3) }}">

                        <button type="submit" class="btn btn-primary rounded-0">
                            <i class="fa-solid fa-save"></i> Save
                        </button>
    
                        <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'') }}" class="btn btn-outline-dark rounded-0 border-0">
                            <i class="fa-solid fa-times-square"></i> Cancle
                        </a>

                    </div>
                </div>

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
