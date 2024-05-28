<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header border-end">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('assets/images/logos/icon-blacklogo.png')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{ asset('assets/images/logos/icon-whitelogo.png')}}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="{{ asset('assets/images/logos/logo-blacklogo.svg')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->
                    <img src="{{ asset('assets/images/logos/logo-whitelogo.svg')}}" class="light-logo" alt="homepage" />
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                        href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu fs-5"></i></a>
                </li>

            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="ms-2 font-weight-medium">Admin</span><span class="fas fa-angle-down ms-2"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">



                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}"><i data-feather="log-out"
                                class="feather-sm text-danger me-1 ms-1"></i> Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="ps-4 p-2"><a href="#" class="btn d-block w-100 btn-info rounded-pill">View
                                Profile</a></div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>