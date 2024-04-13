@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb2')

                        <!-- .row START -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- FORM START -->
                                        {!! Form::model($data, array( 'route'=>'dashboard.settings.update', 'method'=>'put','files'=>'true'))!!}
                                        @csrf

                                            <!-- .row start -->
                                            <div class="row">
                                                                
                                                <!-- .col start -->
                                                <div class="col-lg-6">

                                                    <h5><i class="fa-solid fa-globe"></i> Site Information</h5>

                                                    <ul class="list-group mb-3">
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Site Title</b> 
                                                            <input type="text" value="{!! $data->site_title ?? '' !!}" name="site_title" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        {{-- <li class="list-group-item rounded-0">
                                                            <b class="d-block">Site Address</b>
                                                            <input type="text" value="{!! $data->site_address ?? '' !!}" name="site_address" class="form-control rounded-0 mb-1">
                                                        </li> --}}
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Copyright</b> 
                                                            <textarea name="copyright" rows="3" class="form-control rounded-0 mb-1">{!! $data->copyright ?? '' !!}</textarea>
                                                        </li>
                                                    </ul>

                                                    <h5><h5><i class="fa-solid fa-search"></i> Site Meta for SEO Perposes</h5>

                                                    <ul class="list-group mb-3">
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Meta Tags</b>
                                                            <textarea name="meta_tags" rows="15" class="form-control rounded-0 mb-1">{!! $data->meta_tags ?? '' !!}</textarea>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <!-- .col end -->
                                                
                                                <!-- .col start -->
                                                <div class="col-lg-6">

                                                    <h5><i class="fa-solid fa-address-book"></i> Contact</h5>

                                                    <ul class="list-group mb-3">
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Office Address</b>
                                                            <input type="text" value="{!! $data->office_address ?? '' !!}" name="office_address" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Email Address</b>
                                                            <input type="text" value="{!! $data->email_address ?? '' !!}" name="email_address" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Telephone</b>
                                                            <input type="text" value="{!! $data->telephone ?? '' !!}" name="telephone" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Google Map</b>
                                                            <textarea name="google_map_embed" rows="10" class="form-control rounded-0 mb-1">{!! $data->google_map_embed ?? '' !!}</textarea>
                                                        </li>
                                                    </ul>

                                                    <h5><i class="fa-solid fa-circle-nodes"></i> Social Media Links</h5>

                                                    <ul class="list-group mb-3">
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block"><i class="fa-brands fa-instagram"></i> Instagram</b>
                                                            <input type="text" value="{!! $data->instagram ?? '' !!}" name="instagram" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block"><i class="fa-brands fa-linkedin"></i> Linkedin</b>
                                                            <input type="text" value="{!! $data->linkedin ?? '' !!}" name="linkedin" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block"><i class="fa-brands fa-facebook"></i> Facebook</b>
                                                            <input type="text" value="{!! $data->facebook ?? '' !!}" name="facebook" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block"><i class="fa-brands fa-x-twitter"></i> Twitter</b>
                                                            <input type="text" value="{!! $data->twitter ?? '' !!}" name="twitter" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block"><i class="fa-brands fa-youtube"></i> Youtube</b>
                                                            <input type="text" value="{!! $data->youtube ?? '' !!}" name="youtube" class="form-control rounded-0 mb-1">
                                                        </li>
                                                    </ul>
                                                    
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

                                        {!! Form::close() !!}
                                        <!-- FORM END -->

                                    </div>
                                    <!-- .card-body END -->
                                </div>
                                <!-- .card END -->
                            </div>
                            <!-- .col END -->
                        </div>
                        <!-- .row END -->

@stop
