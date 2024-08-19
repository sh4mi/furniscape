<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light flex-column border-0  ">
    <div class="container-fluid">
        <div class="w-100">
            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <!-- Logo-->
                <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="/">
                    <div class="d-flex align-items-center">
                        <!-- <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26">
                            <path
                                d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z"
                                fill="currentColor" fill-rule="evenodd" />
                        </svg> -->
                        <img src="{{ asset('web/assets/images/logos/logo.png')}}" style="height: 55px;" alt="Furniscape"
                            class="img-fluid">
                        <h2 class="logo-title">Furniscape</h2>
                    </div>
                </a>
                <!-- / Logo-->

                <!-- Navbar Icons-->
                <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">

                    <!-- Mobile Nav Toggler-->
                    <li class="d-lg-none">
                        <span class="nav-link text-body d-flex align-items-center cursor-pointer"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i
                                class="ri-menu-line ri-lg me-1"></i> Menu</span>
                    </li>
                    <!-- /Mobile Nav Toggler-->

                    <li class=" d-none d-lg-inline-block">
                        <a class="nav-link text-body" title="wishlist" href="{{ route('wishlist') }}">
                            <i class="fa fa-heart" style="color:red;font-size: 18px;"></i>
                        </a>
                    </li>
                    <li class=" d-none d-lg-inline-block">
                        <a class="nav-link text-body" title="Track Order" href="{{ route('track.order') }}">
                            <i class="fa fa-truck" style="color:rgb(0, 0, 0);font-size: 18px;"></i>
                        </a>
                    </li>
                    <!-- Navbar Cart Icon-->
                    @auth
                    <li class="d-inline-block position-relative dropdown-cart">
                        <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body"
                            type="button" onclick="window.location.href='{{ route('cart') }}'">
                            <i class="fas fa-cart-plus" style="color:rgb(0, 0, 0);font-size: 18px;"></i>
                            <span id="cartCount" class="badge position-absolute top-0 start-100 translate-middle"
                                style="background-color: red; color: white; border-radius: 50%; padding: 2px 4px;">0</span>
                        </button>
                    </li>
                    <li class="d-inline-block position-relative">
                        <a class="nav-link text-body" title="account" href="{{ route('account') }}">
                            <i class="fa fa-user" style="color:rgb(0, 0, 0);font-size: 18px;"></i>
                        </a>
                    </li>
                    @endauth
                    <nav class="navbar navbar-light bg-light search-bar">
                        <form class="form-inline" action="{{ url('searchproduct')}}" method="POST">
                            @csrf

                            <input class="form-control mr-sm-2 search_product" id="search_product" name="product_name"
                                type="search" placeholder="Search Products" aria-label="Search" style="height: 44px;">
                            <div class="input-group-prepend">
                                <button class="input-group-text search-btn" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </nav>
                    <!-- /Navbar Cart Icon-->

                </ul>
                <!-- Navbar Icons-->

                <!-- Main Navigation-->
                <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
                    id="navbarNavDropdown">

                    <!-- Menu-->
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Shop by category
                            </a>
                            <!-- Menswear dropdown menu-->
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="container-fluid">
                                    <div class="row g-0 g-lg-3">
                                        <!-- Furniture Dropdown Menu Links Section-->
                                        <div class="col col-lg-8 py-lg-5">
                                            <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                <!-- Bedroom -->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Bedroom</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=beds">Beds</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=mattresses"></a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=wardrobes">Wardrobes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=nightstands"></a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=bedroom-furniture-sets">Bedroom
                                                                Furniture Sets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=dressers">Dressers</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=mirrors">Mirrors</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=bedroom-accessories">Bedroom
                                                                Accessories</a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item dropdown-link-all"
                                                                href="/shop?category=bedroom">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Living Room -->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Living Room</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=sofas">Sofas</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=armchairs">ottoman-chairs</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=coffee-tables"></a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=tv-stands"></a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=tables">tables</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=side-tables">Side Tables</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=storage-cabinets">Storage
                                                                Cabinets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=rugs">Rugs</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=chairs">Chairs</a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item dropdown-link-all"
                                                                href="/shop?category=living-room">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Dining -->
                                                <div class="d-none d-xxl-block col">
                                                    <h6 class="dropdown-heading">Dining</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=dining-tables">Dining Tables</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=dining-chairs">Dining Chairs</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=dining-sets">Dining Sets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=bar-stools">Bar Stools</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=sideboards">Sideboards</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=dining-benches">Dining Benches</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=dining-storage">Dining Storage</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=dining-accessories">
                                                            </a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item dropdown-link-all"
                                                                href="/shop?category=dining">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Kitchen -->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Kitchen</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=kitchen-islands">Kitchen
                                                                Islands</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=kitchen-cabinets">Kitchen
                                                                Cabinets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=bar-stools">Stools</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=pantry-cabinets">Pantry
                                                                Cabinets</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=kitchen-tables">Kitchen Tables</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=chairs">Chairs</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item "
                                                                href="/shop?category=kitchen-accessories">
                                                            </a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item "
                                                                href="/shop?category=kitchen-appliances">
                                                            </a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item dropdown-link-all"
                                                                href="/shop?category=kitchen">View All</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div
                                                class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="/shop?category=">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto"
                                                                src="./assets/images/logos/logo-1.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="/shop?category=">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto"
                                                                src="./assets/images/logos/logo-2.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="/shop?category=">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto"
                                                                src="./assets/images/logos/logo-3.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="/shop?category=">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto"
                                                                src="./assets/images/logos/logo-4.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="/shop?category=">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto"
                                                                src="./assets/images/logos/logo-5.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="/shop?category=">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto"
                                                                src="./assets/images/logos/logo-6.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Furniture Dropdown Menu Links Section-->

                                        <!-- Furniture Dropdown Menu Images Section-->
                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="vw-50 border-start h-100 position-absolute"></div>
                                            <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                <div class="row g-4">
                                                    <div class="col-12 col-md-12">
                                                        <div
                                                            class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title=""
                                                                    src="{{asset('web/assets/images/banners/menu.jpg')}}"
                                                                    alt="Furniscape">
                                                            </picture>
                                                            <a class="fw-bolder link-cover"
                                                                href="/shop?category=furniture">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Furniture Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>

                            <!-- / Menswear dropdown menu-->
                        </li>
                        <li class="ms-1 d-none d-lg-inline-block">
                            @auth
                            <a class="nav-link text-body" href="{{ route('logout') }}">
                                Logout
                            </a>
                            {{-- <a class="nav-link text-body" href="{{ route('account') }}">
                                Account
                            </a> --}}
                            @else
                            <a class="nav-link text-body" href="{{ route('login') }}">
                                Login
                            </a>
                            @endauth
                        </li>
                        {{-- @auth
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" href="{{ route('logout') }}">
                                Logout
                            </a>
                        </li>
                        @endauth --}}

                        {{-- <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" href="{{ route('track.order') }}">
                                Track Order
                            </a>
                        </li> --}}
                        {{-- <nav class="navbar navbar-light bg-light search-bar">
                            <form class="form-inline" action="{{ url('searchproduct')}}" method="POST">
                                @csrf
                                <div class="input-group-prepend">
                                    <button class="input-group-text" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                                <input class="form-control mr-sm-2 search_product" id="search_product"
                                    name="product_name" type="search" placeholder="Search Products" aria-label="Search"
                                    style="height: 44px;">
                            </form>
                        </nav> --}}
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/shop?category=bedroom" role="button">
                                Bedroom
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop?category=living" role="button">
                                Living
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop?category=dining" role="button">
                                Dining
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop?category=kitchen" role="button">
                                Kitchen
                            </a>
                        </li> -->

                    </ul> <!-- / Menu-->

                </div>
                <!-- / Main Navigation-->

            </div>
        </div>
    </div>
</nav>
<!-- / Navbar--> <!-- / Navbar-->