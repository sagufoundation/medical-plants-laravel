@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb2')

                        <div class="row">
                            <div class="col-xl-6 col-md-10">
                                <div class="card">
                                    <div class="card-body">

                                        <p>This settings page lets you customize things. You can adjust how the website works to fit your needs.</p>

                                        <div class="row">
                                            <div class="col-lg-12">

                                                <h5><i class="fa-solid fa-globe"></i> Site Information</h5>

                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Site Title</b> {!! $data->site_title ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Site Address</b> {!! $data->site_address ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Copyright</b> {!! $data->copyright ?? '' !!}
                                                    </li>
                                                </ul>

                                                <h5><h5><i class="fa-solid fa-search"></i> Site Meta for SEO Perposes</h5>

                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Meta Tags</b>
                                                        <textarea name="meta_tags" rows="15" class="form-control rounded-0 mb-1">{!! $data->meta_tags ?? '' !!}</textarea>
                                                    </li>
                                                </ul>

                                                <h5><i class="fa-solid fa-circle-nodes"></i> Social Media Links</h5>

                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Instagram</b>
                                                        {!! $data->instagram ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Facebook</b>
                                                        {!! $data->facebook ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Twitter</b>
                                                        {!! $data->twitter ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Linkedin</b>
                                                        {!! $data->linkedin ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Youtube</b>
                                                        {!! $data->youtube ?? '' !!}
                                                    </li>
                                                </ul>

                                                <h5><i class="fa-solid fa-address-book"></i> Contact</h5>

                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Office Address</b>
                                                        {!! $data->office_address ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Email Address</b>
                                                        {!! $data->email_address ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Telephone</b>
                                                        {!! $data->telephone ?? '' !!}
                                                    </li>
                                                    <li class="list-group-item rounded-0">
                                                        <b class="d-block">Google Map</b>
                                                        {!! $data->google_map_embed ?? '' !!}
                                                    </li>
                                                </ul>

                                                <a href="{{ url('dashboard/settings/edit') }}" class="btn btn-success rounded-0">
                                                    <i class="fa-solid fa-edit"></i> Edit
                                                </a>

                                            </div>
                                        </div>

                                    </div> <!-- end .caard-body-->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- .row end -->

@stop
