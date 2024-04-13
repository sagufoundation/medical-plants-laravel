

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                @if (!Auth::user()->picture)
                                <img src="{{ asset('images/users/00.jpg') }}" alt="image user" class="rounded-circle">
                                @else
                                <img src="{{ asset('images/users/'.Auth::user()->picture) }}" alt="image user" title="{{ Auth::user()->name }}" class="rounded-circle">
                                @endif
                                <span class="pro-user-name ml-1">
                                    <span>
                                        {{-- {{ Auth::user()->name }}  --}}
                                        {{ implode("",Auth::user()->roles()->pluck('display_name')->toArray()) }}  
                                    </span> <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <div class="dropdown-header noti-title">
                                    <small>Welcome !</small>
                                    <h6 class="text-overflow m-0">{{ Auth::user()->name }}</h6>
                                </div>
                                <a href="{{ route('dashboard.users.show', Auth::user()->id) }}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Profile</span>
                                </a>
                                <div class="dropdown-divider"></div>

                                <a href="#" class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fe-log-out"></i>
                                    <span> {{ __('Logout') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="{{ url('/dashboard') }}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{ asset($settings->logo) }}" alt="images logo sm dark" height="38">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset($settings->logo_lg) }}" alt="images logo lg dark" height="38">
                            </span>
                        </a>

                        <a href="{{ url('/dashboard') }}" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{ asset($settings->logo) }}" alt="images logo sm light" height="38">
                            </span>
                            <span class="logo-lg">
                                    <img src="{{ asset($settings->logo_lg) }}" alt="images logo lg light" height="38">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        <li>
                            <a href="{{ url('/') }}" target="_blank" class="nav-link">
                                <i class="fe-globe"></i> View Site</a>
                        </li>
                        @if (Auth::user()->hasRole('administrator'))
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-file-plus"></i> Create
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">

                                <!-- item-->
                                <a href="{{ url('dashboard/packages/create') }}" class="dropdown-item">
                                    <i class="fe-file-plus"></i>
                                    <span>New Package</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('dashboard/destinations/create') }}" class="dropdown-item">
                                    <i class="fe-file-plus"></i>
                                    <span>New Destination</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('dashboard/adventures/create') }}" class="dropdown-item">
                                    <i class="fe-file-plus"></i>
                                    <span>New Adventure</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('dashboard/events/create') }}" class="dropdown-item">
                                    <i class="fe-file-plus"></i>
                                    <span>New Event</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('dashboard/sliders/create') }}" class="dropdown-item">
                                    <i class="fe-file-plus"></i>
                                    <span>New Slider</span>
                                </a>

                            </div>
                        </li>
                        @endif
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->
