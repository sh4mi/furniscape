<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
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


                    <!-- Navbar Login-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        @auth
                        <a class="nav-link text-body" href="{{ route('account') }}">
                            Account
                        </a>

                        @else
                        <a class="nav-link text-body" href="{{ route('login') }}">
                            Login
                        </a>
                        @endauth
                    </li>
                    @auth
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="nav-link text-body" href="{{ route('logout') }}">
                            Logout
                        </a>
                    </li>
                    @endauth
                    <!-- /Navbar Login-->

                    <!-- Navbar Cart Icon-->
                    <li class="ms-1 d-inline-block position-relative dropdown-cart">
                        <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body"
                            type="button">
                            Cart
                        </button>
                        <div class="cart-dropdown dropdown-menu">

                            <!-- Cart Header-->
                            <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                <h6 class="fw-bolder m-0">Cart Summary (2 items)</h6>
                                <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                            </div>
                            <!-- / Cart Header-->

                            <!-- Cart Items-->
                            <div>

                                <!-- Cart Product-->
                                <div class="row mx-0 py-4 g-0 border-bottom">
                                    <div class="col-2 position-relative">
                                        <picture class="d-block ">
                                            <img class="img-fluid" src="./assets/images/products/product-cart-1.jpg"
                                                alt="Furniscape">
                                        </picture>
                                    </div>
                                    <div class="col-9 offset-1">
                                        <div>
                                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                Nike Air VaporMax 2021
                                                <i class="ri-close-line ms-3"></i>
                                            </h6>
                                            <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 9 /
                                                Qty: 1</span>
                                        </div>
                                        <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                    </div>
                                </div>
                                <!-- Cart Product-->
                                <div class="row mx-0 py-4 g-0 border-bottom">
                                    <div class="col-2 position-relative">
                                        <picture class="d-block ">
                                            <img class="img-fluid" src="./assets/images/products/product-cart-2.jpg"
                                                alt="Furniscape">
                                        </picture>
                                    </div>
                                    <div class="col-9 offset-1">
                                        <div>
                                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                Nike ZoomX Vaporfly
                                                <i class="ri-close-line ms-3"></i>
                                            </h6>
                                            <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 11 /
                                                Qty: 1</span>
                                        </div>
                                        <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart Items-->

                            <!-- Cart Summary-->
                            <div>
                                <div class="pt-3">
                                    <div
                                        class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                        <div>
                                            <p class="m-0 fw-bold fs-5">Grand Total</p>
                                            <span class="text-muted small">Inc $45.89 sales tax</span>
                                        </div>
                                        <p class="m-0 fs-5 fw-bold">$422.99</p>
                                    </div>
                                </div>
                                <a href="./cart.html" class="btn btn-outline-dark w-100 text-center mt-4"
                                    role="button">View Cart</a>
                                <a href="./checkout.html" class="btn btn-dark w-100 text-center mt-2"
                                    role="button">Proceed To Checkout</a>
                            </div>
                            <!-- / Cart Summary-->
                        </div>


                    </li>
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
                                                                href="/shop?category=mattresses">Mattresses</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=wardrobes">Wardrobes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=nightstands">Nightstands</a></li>
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
                                                                href="/shop?category=armchairs">Armchairs</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=coffee-tables">Coffee Tables</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=tv-stands">TV Stands</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=bookcases">Bookcases</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=side-tables">Side Tables</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=storage-cabinets">Storage
                                                                Cabinets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item"
                                                                href="/shop?category=rugs">Rugs</a></li>
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
                                                                href="/shop?category=dining-accessories">Dining
                                                                Accessories</a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item dropdown-link-all"
                                                                href="/shop?category=dining">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Kitchen -->
                                                <div class="col">
                                                    <h6 class="dropdown-heading text-danger">Kitchen</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger"
                                                                href="/shop?category=kitchen-islands">Kitchen
                                                                Islands</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger"
                                                                href="/shop?category=kitchen-cabinets">Kitchen
                                                                Cabinets</a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger"
                                                                href="/shop?category=bar-stools">Bar Stools</a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger"
                                                                href="/shop?category=pantry-cabinets">Pantry
                                                                Cabinets</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger"
                                                                href="/shop?category=kitchen-tables">Kitchen Tables</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger"
                                                                href="/shop?category=chairs">Chairs</a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger"
                                                                href="/shop?category=kitchen-accessories">Kitchen
                                                                Accessories</a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger"
                                                                href="/shop?category=kitchen-appliances">Kitchen
                                                                Appliances</a></li>
                                                        <li class="dropdown-list-item"><a
                                                                class="dropdown-item text-danger dropdown-link-all"
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

                        <li class="nav-item">
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
                        </li>

                    </ul> <!-- / Menu-->

                </div>
                <!-- / Main Navigation-->

            </div>
        </div>
    </div>
</nav>
<!-- / Navbar--> <!-- / Navbar-->