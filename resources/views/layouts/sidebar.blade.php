<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <div class="devider"></div>


                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/users') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-account"></i>

                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/categories') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-calendar-check"></i>
                        <span class="hide-menu">Categories</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/products') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-calendar-check"></i>
                        <span class="hide-menu">Products</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/orders') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-calendar-check"></i>
                        <span class="hide-menu">Orders</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-apple-safari"></i>
                        <span class="hide-menu">Reports</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="timeline-center.html" class="sidebar-link">
                                <i class="mdi mdi-clock-fast"></i>
                                <span class="hide-menu"> Center Timeline </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="timeline-horizontal.html" class="sidebar-link">
                                <i class="mdi mdi-clock-end"></i>
                                <span class="hide-menu"> Horizontal Timeline</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="timeline-left.html" class="sidebar-link">
                                <i class="mdi mdi-clock-in"></i>
                                <span class="hide-menu"> Left Timeline</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="timeline-right.html" class="sidebar-link">
                                <i class="mdi mdi-clock-start"></i>
                                <span class="hide-menu"> Right Timeline</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('admin/ratings') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-calendar-check"></i>
                        <span class="hide-menu">Rating</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>