@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb2')

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-lg-6">

                                                <h5><i class="fa-solid fa-globe"></i> Site Information</h5>

                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Site Title</b> {!! $data->site_title ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Copyright</b> {!! $data->copyright ?? '' !!}
                                                    </li>
                                                </ul>

                                                <h5><h5><i class="fa-solid fa-search"></i> Site Meta for SEO Perposes</h5>

                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Meta Tags</b>
                                                        <textarea name="meta_tags" rows="15" class="form-control rounded-0 mb-1" disabled>{!! $data->meta_tags ?? '' !!}</textarea>
                                                    </li>
                                                </ul>

                                            </div>
                                            <!-- .col end -->

                                            <!-- .col start -->
                                            <div class="col-lg-6">

                                                <h5><i class="fa-solid fa-address-book"></i> Contact</h5>

                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Office Address</b> {!! $data->office_address ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Email Address</b> {!! $data->email_address ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Telephone</b> {!! $data->telephone ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Google Map</b> {!! $data->google_map_embed ?? '' !!}
                                                    </li>
                                                </ul> 


                                                <h5><i class="fa-solid fa-circle-nodes"></i> Social Media Links</h5>

                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block"><i class="fa-brands fa-instagram"></i> Instagram</b> 
                                                        @if($data->instagram) <a href="{!! $data->instagram !!}" target="_blank">{!! $data->instagram !!}</a> @else <i>null</i> @endif
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block"><i class="fa-brands fa-linkedin"></i> Linkedin</b> 
                                                        @if($data->linkedin) <a href="{!! $data->linkedin !!}" target="_blank">{!! $data->linkedin !!}</a> @else <i>null</i> @endif
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block"><i class="fa-brands fa-facebook"></i> Facebook</b> 
                                                        @if($data->facebook) <a href="{!! $data->facebook !!}" target="_blank">{!! $data->facebook !!}</a> @else <i>null</i> @endif
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block"><i class="fa-brands fa-x-twitter"></i> Twitter</b> 
                                                        @if($data->twitter) <a href="{!! $data->twitter !!}" target="_blank">{!! $data->twitter !!}</a> @else <i>null</i> @endif
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block"><i class="fa-brands fa-youtube"></i> Youtube</b> 
                                                        @if($data->youtube) <a href="{!! $data->youtube !!}" target="_blank">{!! $data->youtube !!}</a> @else <i>null</i> @endif
                                                    </li>
                                                </ul>

                                            </div>
                                            <!-- .col end -->
                                        </div>
                                        <!-- .row end -->

                                            <!-- row start -->
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{ url('dashboard/settings/edit') }}" class="btn btn-outline-secondary border-0 rounded-0">
                                                        <i class="fa-solid fa-edit"></i> Edit
                                                    </a>
                                                </div>
                                            </div> 
                                            <!-- .row end --> 

                                    </div> <!-- end .caard-body-->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- .row end -->

@stop
