                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ url(Request::segment(1)) }}">{{ ucfirst(Request::segment(1)) }}</a></li>
                                            <li class="breadcrumb-item active">{{ ucfirst(Request::segment(2)) }}</li>
                                        </ol>
                                    </div>
                                    @if(Request::segment(3) == 'create') 
                                    <h4 class="page-title">{{ ucfirst(Request::segment(2)) }} <i class="fa-solid fa-arrow-right"></i><span class="font-weight-bold"> {{ ucfirst(Request::segment(3)) }} New</span> </h4>
                                    @else 
                                    <h4 class="page-title">{{ ucfirst(Request::segment(2)) }}</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- .row end -->