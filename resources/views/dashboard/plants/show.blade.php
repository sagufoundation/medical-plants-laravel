
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Plant name in Latin</b>
                            <p class="h4">{!! $data->latin_name ?? '' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Plant name in local language</b>
                            <p class="h4">{!! $data->local_name ?? '' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Plant name in Bahasa Indonesia</b>
                            <p class="h4">{!! $data->indonesian_name ?? '' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Taxonomists</b>
                            <p class="h4">{!! $data->taxonomists ?? '' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Treatments</b>
                            <p class="h4">{!! $data->treatments ?? '' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Traditional Usage</b>
                            <p class="h4">{!! $data->traditional_usage ?? '' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Known Phytochemical Consituents</b>
                            <p class="h4">{!! $data->known_phytochemical_consituents ?? '' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Regency <top class="text-danger">*</top></b>
                            <p class="h4">{!! $data->regency->name ?? '<small class="text-danger">Bagian ini wajib dilengkapi</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Tribe <top class="text-danger">*</top></b>
                            <p class="h4">{!! $data->tribe->tribe_name ?? '<small class="text-danger">Bagian ini wajib dilengkapi</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Contributor <top class="text-danger">*</top></b>
                            <p class="h4">{!! $data->contributor->full_name ?? '<small class="text-danger">Bagian ini wajib dilengkapi</small>' !!}</p>
                        </div>
                        <!-- item group END -->
                        
                        <div class="p-2 border-bottom">
                            <b class="d-block mb-2">Status</b>
                            <p class="h4">{!! $data->status ?? '' !!}</p>
                        </div>
                        <!-- item group END -->

                    </div>
                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Cover</div>
                                @if (empty($data->image_cover))
                                <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                @else
                                <img src="{{ asset('images/plants/' . $data->image_cover) }}" alt="{!! $data->image_cover !!}" class="border shadow w-100">
                                <div class="position-absolute top-0 start-0">
                                    <a href="{{ url('dashboard/plants/cover/'.$data->id.'/edit') }}" class="btn btn-sm btn-dark px-1 py-0 rounded-0"><i class="fa-solid fa-edit"></i></a>
                                    <a href="{{ url('dashboard/plants/cover/'.$data->id.'/trash') }}" class="btn btn-sm btn-outline-dark px-1 py-0 rounded-0"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                @endif
                            </div> <!-- col end -->
                            
                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Daun</div>
                                @if (empty($data->image_daun))
                                <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                @else
                                <img src="{{ asset('images/plants/' . $data->image_daun) }}" alt="{!! $data->image_daun !!}" class="border shadow w-100">
                                <div>
                                    <a href="{{ url('dashboard/plants/daun/'.$data->id.'/edit') }}" class="btn btn-sm btn-dark px-1 py-0 rounded-0"><i class="fa-solid fa-edit"></i></a>
                                    <a href="{{ url('dashboard/plants/daun/'.$data->id.'/trash') }}" class="btn btn-sm btn-outline-dark px-1 py-0 rounded-0"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                @endif
                            </div> <!-- col end -->
                            
                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Buah</div>
                                @if (empty($data->image_buah))
                                <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                @else
                                <img src="{{ asset('images/plants/' . $data->image_buah) }}" alt="{!! $data->image_buah !!}" class="border shadow w-100">
                                <div>
                                    <a href="{{ url('dashboard/plants/buah/'.$data->id.'/edit') }}" class="btn btn-sm btn-dark px-1 py-0 rounded-0"><i class="fa-solid fa-edit"></i></a>
                                    <a href="{{ url('dashboard/plants/buah/'.$data->id.'/trash') }}" class="btn btn-sm btn-outline-dark px-1 py-0 rounded-0"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                @endif
                            </div> <!-- col end -->
                            
                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Pohon</div>
                                @if (empty($data->image_pohon))
                                <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                @else
                                <img src="{{ asset('images/plants/' . $data->image_pohon) }}" alt="{!! $data->image_pohon !!}" class="border shadow w-100">
                                <div>
                                    <a href="{{ url('dashboard/plants/pohon/'.$data->id.'/edit') }}" class="btn btn-sm btn-dark px-1 py-0 rounded-0"><i class="fa-solid fa-edit"></i></a>
                                    <a href="{{ url('dashboard/plants/pohon/'.$data->id.'/trash') }}" class="btn btn-sm btn-outline-dark px-1 py-0 rounded-0"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                @endif
                            </div> <!-- col end -->
                            
                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Bunga</div>
                                @if (empty($data->image_bunga))
                                <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                @else
                                <img src="{{ asset('images/plants/' . $data->image_bunga) }}" alt="{!! $data->image_bunga !!}" class="border shadow w-100">
                                <div>
                                    <a href="{{ url('dashboard/plants/bunga/'.$data->id.'/edit') }}" class="btn btn-sm btn-dark px-1 py-0 rounded-0"><i class="fa-solid fa-edit"></i></a>
                                    <a href="{{ url('dashboard/plants/bunga/'.$data->id.'/trash') }}" class="btn btn-sm btn-outline-dark px-1 py-0 rounded-0"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                @endif
                            </div> <!-- col end -->
                            
                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Batang</div>
                                @if (empty($data->image_batang))
                                <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                @else
                                <img src="{{ asset('images/plants/' . $data->image_batang) }}" alt="{!! $data->image_batang !!}" class="border shadow w-100">
                                <div>
                                    <a href="{{ url('dashboard/plants/batang/'.$data->id.'/edit') }}" class="btn btn-sm btn-dark px-1 py-0 rounded-0"><i class="fa-solid fa-edit"></i></a>
                                    <a href="{{ url('dashboard/plants/batang/'.$data->id.'/trash') }}" class="btn btn-sm btn-outline-dark px-1 py-0 rounded-0"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                @endif
                            </div> <!-- col end -->
                            
                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Keseluruhan</div>
                                @if (empty($data->image_keseluruhan))
                                <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                @else
                                <img src="{{ asset('images/plants/' . $data->image_keseluruhan) }}" alt="{!! $data->image_keseluruhan !!}" class="border shadow w-100">
                                <div>
                                    <a href="{{ url('dashboard/plants/keseluruhan/'.$data->id.'/edit') }}" class="btn btn-sm btn-dark px-1 py-0 rounded-0"><i class="fa-solid fa-edit"></i></a>
                                    <a href="{{ url('dashboard/plants/keseluruhan/'.$data->id.'/trash') }}" class="btn btn-sm btn-outline-dark px-1 py-0 rounded-0"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                @endif
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
