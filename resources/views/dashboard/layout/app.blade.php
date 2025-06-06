<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title> {{ $settings->site_title }} </title>

    <!-- META TAGS -->
    {!! $settings->meta_tags ?? '' !!}

    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- HEAD LINKS AND SCRIPTS -->
    @include('dashboard.layout.includes.header')

</head>
<body class="loading" data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- WRAPPER START -->
    <div id="wrapper">

        <!-- HEADER NAVIGATION -->
        @include('dashboard.layout.includes.header-nav')

        <!-- SIDEBAR NAVIGATION -->
        @include('dashboard.layout.includes.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    @yield('content')
                    <!-- end page title -->
                </div> <!-- container -->
            </div> <!-- content -->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            {!! $settings->copyright ?? '' !!}
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                {!! $settings->site_title ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- WRAPPER END -->

    <!-- FOOTER -->
    @include('dashboard.layout.includes.footer')

    <!-- SWET ALERT -->
    @include('sweetalert::alert')

</body>
</html>
