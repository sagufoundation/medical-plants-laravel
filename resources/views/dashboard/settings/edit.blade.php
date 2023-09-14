@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb2')

                        <div class="row">
                            <div class="col-xl-6 col-md-10">
                                <div class="card">
                                    <div class="card-body">

                                        <p>This settings page lets you customize things. You can adjust how the website works to fit your needs.</p>

                                        <!-- FORM START -->
                                        {!! Form::model($data, array( 'route'=>'dashboard.settings.update', 'method'=>'put','files'=>'true'))!!}
                                        @csrf

                                            <div class="row">
                                                <div class="col-lg-12">
    
                                                    <h5><i class="fa-solid fa-globe"></i> Site Information</h5>
    
                                                    <ul class="list-group mb-3">
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Site Title</b> 
                                                            <input type="text" value="{!! $data->site_title ?? '' !!}" name="site_title" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Site Address</b>
                                                            <input type="text" value="{!! $data->site_address ?? '' !!}" name="site_address" class="form-control rounded-0 mb-1">
                                                        </li>
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
    
                                                    <h5><i class="fa-solid fa-circle-nodes"></i> Social Media Links</h5>
    
                                                    <ul class="list-group mb-3">
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Instagram</b>
                                                            <input type="text" value="{!! $data->instagram ?? '' !!}" name="instagram" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Facebook</b>
                                                            <input type="text" value="{!! $data->facebook ?? '' !!}" name="facebook" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Twitter</b>
                                                            <input type="text" value="{!! $data->twitter ?? '' !!}" name="twitter" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Linkedin</b>
                                                            <input type="text" value="{!! $data->linkedin ?? '' !!}" name="linkedin" class="form-control rounded-0 mb-1">
                                                        </li>
                                                        <li class="list-group-item rounded-0">
                                                            <b class="d-block">Youtube</b>
                                                            <input type="text" value="{!! $data->youtube ?? '' !!}" name="youtube" class="form-control rounded-0 mb-1">
                                                        </li>
                                                    </ul>
    
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
    
                                                    <button type="submit" class="btn btn-success rounded-0">
                                                        <i class="fa-solid fa-save"></i> Save
                                                    </button>
    
                                                </div>
                                            </div>

                                        {!! Form::close() !!}
                                        <!-- FORM END -->

                                    </div> <!-- end .caard-body-->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- .row end -->

@stop
