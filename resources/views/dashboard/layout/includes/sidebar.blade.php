

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">

                        @if (!Auth::user()->picture)
                        <img src="{{ asset('images/users/00.jpg') }}" alt="user-img" class="rounded-circle avatar-md">
                        @else
                        <img src="{{ asset(Auth::user()->picture) }}" alt="user-img" title="{{ Auth::user()->name }}" class="rounded-circle avatar-md">
                        @endif

                        <h5 class="mb-0">
                            {{ Auth::user()->name ?? ''}}
                        </h5>
                        <p class="text-muted">
                            {{ implode('', Auth::user()->roles()->pluck('display_name')->toArray()) }}
                        </p>
                    </div>

                    <!--- Sidemenu -->
                    @if (Auth::user()->hasRole('admin'))

                        <div id="sidebar-menu">
                            <ul id="side-menu">
                                <li class="@if(!Request::segment(1) == 'dashboard') menuitem-active @endif">
                                    <a href="{{ url('dashboard') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Plants Mangements</li>

                                <li class="@if(Request::segment(2) == 'plants') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/plants') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $plants_total ?? '' }}
                                        </span>
                                        <span> Plants</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Master Data</li>

                                <li class="@if(Request::segment(2) == 'regencies') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/regencies') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $provinces_total ?? '' }}
                                        </span>
                                        <span> Regencies</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'tribes') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/tribes') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $provinces_total ?? '' }}
                                        </span>
                                        <span> Tribes</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'contributors') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/contributors') }}">
                                        <i class="fa-solid fa-users"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $contributors_total ?? '' }}
                                        </span>
                                        <span> Contributors</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                {{-- <li class="@if(Request::segment(2) == 'locations') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/locations') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $locations_total ?? '' }}
                                        </span>
                                        <span> Locations</span>
                                    </a>
                                </li> --}}
                                <!-- menu item end -->

                                {{-- <li class="@if(Request::segment(2) == 'provinces') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/provinces') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $provinces_total ?? '' }}
                                        </span>
                                        <span> Provinces</span>
                                    </a>
                                </li> --}}
                                <!-- menu item end -->

                                {{-- <li class="@if(Request::segment(2) == 'icons') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/icons') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $icons_total ?? '' }}
                                        </span>
                                        <span> Icons</span>
                                    </a>
                                </li> --}}
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Administrator</li>

                                <li class="@if(Request::segment(2) == 'users') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/users') }}">
                                        <i class="fa-solid fa-user"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $users_total ?? '' }}
                                        </span>
                                        <span> Users </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(2) == 'settings') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/settings') }}">
                                        <i class="fa-solid fa-gear"></i>
                                        <span> Settings </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                            </ul>
                        </div>

                    @elseif (Auth::user()->hasRole('contributor'))

                        <div id="sidebar-menu">

                            <ul id="side-menu">

                                <li class="menu-title mt-2">Menu Utama</li>

                                <li>
                                    <a href="{{ url('dashboard') }}">
                                        <i data-feather="airplay"></i>
                                        <span> dashboard </span>
                                    </a>
                                </li>
                                <li class="@if(Request::segment(1) == 'siswa') menuitem-active @endif">
                                    <a href="{{ url('dashboard/siswa') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dashboard_jml_siswa ?? '0' }}
                                        </span>
                                        <span> Lorem</span>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    @endif
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
