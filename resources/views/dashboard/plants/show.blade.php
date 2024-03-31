
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
                                    <a data-toggle="modal" data-target="#modalCover" role="button">
                                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                    </a>
                                @else
                                <a data-toggle="modal" data-target="#modalCover" role="button">
                                    <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_cover) }}" alt="{!! $data->image_cover !!}" class="border shadow w-100">
                                </a>
                                @endif
                            </div> <!-- col end -->

                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Daun</div>
                                @if (empty($data->image_daun))
                                    <a data-toggle="modal" data-target="#modalDaun" role="button">
                                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                    </a>
                                @else
                                <a data-toggle="modal" data-target="#modalDaun" role="button">
                                    <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_daun) }}" alt="{!! $data->image_daun !!}" class="border shadow w-100">
                                </a>
                                @endif
                            </div> <!-- col end -->

                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Buah</div>
                                @if (empty($data->image_buah))
                                    <a data-toggle="modal" data-target="#modalBuah" role="button">
                                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                    </a>
                                @else
                                <a data-toggle="modal" data-target="#modalBuah" role="button">
                                    <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_buah) }}" alt="{!! $data->image_buah !!}" class="border shadow w-100">
                                </a>
                                @endif
                            </div> <!-- col end -->

                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Pohon</div>
                                @if (empty($data->image_pohon))
                                    <a data-toggle="modal" data-target="#modalPohon" role="button">
                                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                    </a>
                                @else
                                <a data-toggle="modal" data-target="#modalPohon" role="button">
                                    <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_pohon) }}" alt="{!! $data->image_pohon !!}" class="border shadow w-100">
                                </a>
                                @endif
                            </div> <!-- col end -->

                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Bunga</div>
                                @if (empty($data->image_bunga))
                                    <a data-toggle="modal" data-target="#modalBunga" role="button">
                                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                    </a>
                                @else
                                <a data-toggle="modal" data-target="#modalBunga" role="button">
                                    <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_bunga) }}" alt="{!! $data->image_bunga !!}" class="border shadow w-100">
                                </a>
                                @endif
                            </div> <!-- col end -->

                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Batang</div>
                                @if (empty($data->image_batang))
                                    <a data-toggle="modal" data-target="#modalBatang" role="button">
                                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                    </a>
                                @else
                                <a data-toggle="modal" data-target="#modalBatang" role="button">
                                    <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_batang) }}" alt="{!! $data->image_batang !!}" class="border shadow w-100">
                                </a>
                                @endif
                            </div> <!-- col end -->

                            <div class="col-xl-4 col-lg-4 col-lg-6 col-sm-12 mb-3">
                                <div class="font-weight-bold">Keseluruhan</div>
                                @if (empty($data->image_keseluruhan))
                                    <a data-toggle="modal" data-target="#modalKeseluruhan" role="button">
                                        <img src="{{ asset('images/plants/00-single.jpg') }}" alt="Image empty" class="border shadow w-100">
                                    </a>
                                @else
                                <a data-toggle="modal" data-target="#modalKeseluruhan" role="button">
                                    <img src="{{ asset('images/plants/' . $data->id . '/' . $data->image_keseluruhan) }}" alt="{!! $data->image_keseluruhan !!}" class="border shadow w-100">
                                </a>
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

                            @if($data->status == 'Publish')
                            <a href="{{ url('plants/' . $data->slug . '/detail') }}" class="btn btn-sm btn-dark rounded-0 mx-1" target="_blank">
                                <i class="fa-solid fa-eye"></i> Public View
                            </a>
                            @endif
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


@include('dashboard.plants.modals.modal-image_cover')
@include('dashboard.plants.modals.modal-image_daun')
@include('dashboard.plants.modals.modal-image_buah')
@include('dashboard.plants.modals.modal-image_pohon')
@include('dashboard.plants.modals.modal-image_bunga')
@include('dashboard.plants.modals.modal-image_batang')
@include('dashboard.plants.modals.modal-image_keseluruhan')

@endsection
