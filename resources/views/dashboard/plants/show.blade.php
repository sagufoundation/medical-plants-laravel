
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-8">
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Plant name in Latin</b>
                            <p class="h4">{!! $data->latin_name ?? '<small class="text-warning">No information</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Plant name in local language</b>
                            <p class="h4">{!! $data->local_name ?? '<small class="text-warning">No information</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Plant name in Bahasa Indonesia</b>
                            <p class="h4">{!! $data->indonesian_name ?? '<small class="text-warning">No information</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Taxonomists</b>
                            <p class="h4">{!! $data->taxonomists ?? '<small class="text-warning">No information</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Treatments</b>
                            <p class="h4">{!! $data->treatments ?? '<small class="text-warning">No information</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Traditional Usage</b>
                            <p class="h4">{!! $data->traditional_usage ?? '<small class="text-warning">No information</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Known Phytochemical Consituents</b>
                            <p class="h4">{!! $data->known_phytochemical_consituents ?? '<small class="text-warning">No information</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Regency <top class="text-danger">*</top></b>
                            <p class="h4">{!! $data->regency->name ?? '<small class="text-danger">This is a required field</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Village</b>
                            <p class="h4">{!! $data->village ?? 'No information' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Contributor <top class="text-danger">*</top></b>
                            <p class="h4">{!! $data->contributor->full_name ?? '<small class="text-danger">This is a required field</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Status</b>
                            <p class="h4">{!! $data->status ?? '' !!}</p>
                        </div>
                        <!-- item group END -->

                    </div>
                    
                    <div class="col-lg-4">

                        <div class="row">

                            <div class="col-xl-6 col-sm-12 mb-3">
                                <label for="image_cover">Cover</label>
                                
                                <a href="" data-toggle="modal" data-target="#CoverModal">
                                    <img 
                                        src="@if(empty($data->image_cover)) {{ asset('images/plants/00-single.jpg') }} @else {{ asset('images/plants/' . $data->id.'/'.$data->image_cover) }} @endif" 
                                        id="preview_image_cover" 
                                        alt="image cover" 
                                        class="w-100"
                                    >                                            
                                </a>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="CoverModal" tabindex="-1" aria-labelledby="CoverModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="CoverModalLabel">Cover</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <img 
                                                src="@if(empty($data->image_cover)) {{ asset('images/plants/00-single.jpg') }} @else {{ asset('images/plants/' . $data->id.'/'.$data->image_cover) }} @endif " 
                                                id="preview_image_cover" 
                                                alt="image cover" 
                                                class="w-100"
                                            >  
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div> <!-- col end -->

                            <div class="col-xl-6 col-sm-12 mb-3">
                                <label for="image_daun">Daun</label>
                                
                                <a href="" data-toggle="modal" data-target="#DaunModal">
                                    <img 
                                        src="@if(empty($data->image_daun)) {{ asset('images/plants/00-single.jpg') }} @else {{ asset('images/plants/' . $data->id.'/'.$data->image_daun) }} @endif " 
                                        id="preview_image_daun" 
                                        alt="image cover" 
                                        class="w-100"
                                    >                                            
                                </a>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="DaunModal" tabindex="-1" aria-labelledby="DaunModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Daun</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <img 
                                                src="@if(empty($data->image_daun)) {{ asset('images/plants/00-single.jpg') }} @else {{ asset('images/plants/' . $data->id.'/'.$data->image_daun) }} @endif " 
                                                id="preview_image_daun" 
                                                alt="image cover" 
                                                class="w-100"
                                            >  
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div> <!-- col end -->

                            <div class="col-xl-6 col-sm-12 mb-3">
                                <label for="image_buah">Buah</label>
                                
                                <a href="" data-toggle="modal" data-target="#buahModal">
                                    <img 
                                        src="@if(empty($data->image_buah)) {{ asset('images/plants/00-single.jpg') }} @else {{ asset('images/plants/' . $data->id.'/'.$data->image_buah) }} @endif " 
                                        id="preview_image_buah" 
                                        alt="image cover" 
                                        class="w-100"
                                    >                                            
                                </a>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="buahModal" tabindex="-1" aria-labelledby="buahModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="buahModalLabel">Buah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <img 
                                                src="@if(empty($data->image_buah)) {{ asset('images/plants/00-single.jpg') }} @else {{ asset('images/plants/' . $data->id.'/'.$data->image_buah) }} @endif " 
                                                id="preview_image_buah" 
                                                alt="image cover" 
                                                class="w-100"
                                            >  
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div> <!-- col end -->

                            

                        </div>

                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col-12">

                        <div class="d-flex">
                            <a href="{{ route(Request::segment(1).'.'.Request::segment(2)) }}" class="btn btn-sm btn-light rounded-0 mx-1">
                                <i class="fa-solid fa-reply"></i>
                            </a>
                            <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'.edit', $data->id) }}" class="btn btn-sm btn-light rounded-0 mx-1">
                                <i class="fa-solid fa-edit"></i>
                            </a>

                            <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-light rounded-0 mx-1">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            </form>

                            <a href="{{ url('plants/' . $data->slug . '/detail') }}" class="btn btn-sm btn-dark rounded-0 mx-1" target="_blank">
                                <i class="fa-solid fa-eye"></i> Public View
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <!-- .card-body END -->
        </div>
        <!-- .card END -->
    </div>
    <!-- .col END -->
</div>
<!-- .row END -->

@endsection
