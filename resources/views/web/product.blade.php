@extends('web.layouts.app')
@section('content')
<style>
    .product-image {
        width: 100%;
        /* max-height: 500px; */
        /* Set a fixed height for all images */
        object-fit: cover;
        display: block;
    }

    .variant-thumbnail {
        width: 80px;
        /* Adjust the size of the variant thumbnails */
        height: 80px;
        object-fit: cover;
        cursor: pointer;
    }

    .wishlist i {
        color: red;
        font-size: 28px;
        position: relative;
        top: -13px;
    }

    .ri-heart-fill {
        color: red !important;
    }

    .selected-var {
        border: 2px solid black !important;
    }

    .variant-option {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .variant-option.selected {
        border-color: #000;
        background-color: #f5f5f5;
    }

    .variant-option:hover .variant-color-text {
        color: #000;
    }

    .variant-selection .d-flex {
        flex-wrap: nowrap;
        /* Prevent wrapping to keep all images in one row */
    }

    .color-name {
        font-weight: bold;
    }
</style>
<section class="mt-0">

    <!-- Page Content Goes Here -->

    <!-- Breadcrumbs-->
    <div class="bg-dark py-6">
        <div class="container-fluid">
            <nav class="m-0" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item breadcrumb-light"><a href="#">Home</a></li>
                    <li class="breadcrumb-item breadcrumb-light"><a href="#">{{ $product->category->name }}</a></li>
                    <li class="breadcrumb-item  breadcrumb-light active" aria-current="page">{{ $product->name }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- / Breadcrumbs-->

    <div class="container-fluid mt-5">
        <div id="alert-placeholder"></div>
        <!-- Product Top Section-->
        <div class="row g-9 product_data" data-sticky-container>

            <!-- Product Images-->
            <div class="col-12 col-md-6 col-xl-6">
                <div class="row g-3" data-aos="fade-right">
                    <!-- Main Image -->
                    <div class="img-card">
                        <div class="zoomable">
                            @if ($product->images->isNotEmpty())
                            <img id="featured-image" class="img-fluid product-image zoomable__img"
                                src="{{ asset($product->images->first()->image_url) }}" alt="Furniscape">
                            @else
                            <img id="featured-image" class=""
                                src="{{ asset('/web/assets/images/product/placeholder.png') }}"
                                alt="No Image Available">
                            @endif
                        </div>
                        @foreach ($product->images as $image)
                        <!-- small img -->
                        <div class="small-Card">
                            <img src="{{ asset($image->image_url) }}" alt="" class="small-Img  product-image">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /Product Images-->

            <!-- Product Information-->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="sticky-top top-5">
                    <div class="pb-3" data-aos="fade-in">
                        <div class="d-flex align-items-center mb-3">
                            <p class="small fw-bolder text-uppercase tracking-wider text-muted m-0 me-4">
                                {{ $product->name }}</p>
                            <div class="d-flex justify-content-start align-items-center disable-child-pointer cursor-pointer"
                                data-pixr-scrollto data-target=".reviews">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    @php
                                    $averageRating = $product->ratings->avg('rating');
                                    $ratingPercentage = ($averageRating / 5) * 100;
                                    @endphp
                                    <div class="position-absolute stars" style="width: {{ $ratingPercentage }}%">
                                        @for ($i = 0; $i < 5; $i++) <i class="ri-star-fill text-dark mr-1"></i>
                                            @endfor
                                    </div>
                                    <div class="stars">
                                        @for ($i = 0; $i < 5; $i++) <i class="ri-star-fill mr-1 text-muted opacity-25">
                                            </i>
                                            @endfor
                                    </div>
                                </div> <small class="text-muted d-inline-block ms-2 fs-bolder">
                                    ({{ $product->ratings->count() }} review(s))
                                </small>
                            </div>
                        </div>

                        <h1 class="mb-1 fs-2 fw-bold">{{ $product->name }}</h1>
                        <div class="d-flex justify-content-between align-items-center">
                            @if ($product->discount_price > 0)
                            <h2 class="fs-4 m-0 var-price">Rs.{{ $product->discount_price }}</h2>
                            @else
                            <h2 class="fs-4 m-0 var-price">Rs.{{ $product->price }}</h2>
                            @endif
                        </div>
                        <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted wishlist"
                            title="Add to wishlist" data-product-id="{{ $product->id }}" style="cursor: pointer;">
                            <i class="ri-heart-line"></i>
                        </span>
                        <!-- Variant Selection -->
                        @if ($product->variants && $product->variants->isNotEmpty())
                        <div class="variant-selection mt-4">
                            <h4 class="var-name">Variants</h4>
                            <div class="d-flex flex-wrap">
                                @foreach ($product->variants as $variant)
                                <div class="variant-option p-2 mb-2 border rounded me-2"
                                    data-variant-id="{{ $variant->id }}"
                                    data-variant-image="{{ $variant->images->first()->image_url }}"
                                    data-variant-price="{{ $variant->discount_price > 0 ? $variant->discount_price : $variant->price }}">
                                    <div class="d-flex">
                                        @if ($variant->images->isNotEmpty())
                                        <img class="img-fluid variant-thumbnail"
                                            src="{{ asset($variant->images->first()->image_url) }}"
                                            data-name="{{ $variant->name}}"
                                            data-price="{{ $variant->discount_price > 0 ? $variant->discount_price : $variant->price }}"
                                            alt="Variant Image">
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <!-- Variant Selection -->
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="hidden" value="{{$product->id }}" class="prod_id">
                            <h4>Quantity : </h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" id="decr-btn" class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" id="quant-inp"
                                    class="form-control qty-input text-center" value="1"
                                    style="width: 170px; height: 52px;" readonly>
                                <button type="button" id="incr-btn" class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <button class="btn btn-dark w-100 mt-4 mb-0 hover-lift-sm hover-boxshadow addToCartBtn">Add To
                            Shopping
                            Bag</button>
                        <!-- Product Highlights-->
                        <div class="my-5">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="text-center px-2">
                                        <i class="ri-24-hours-line ri-2x"></i>
                                        <small class="d-block mt-1">Next-day Delivery</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="text-center px-2">
                                        <i class="ri-secure-payment-line ri-2x"></i>
                                        <small class="d-block mt-1">Secure Checkout</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="text-center px-2">
                                        <i class="ri-service-line ri-2x"></i>
                                        <small class="d-block mt-1">Free Returns</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Product Highlights-->

                        <!-- Product Accordion -->
                        <div class="accordion" id="accordionProduct">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Product Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <p class="m-0">{{ $product->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                {{-- <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Details & Care
                                    </button>
                                </h2> --}}
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Composition</span>
                                                <span class="col-7 offset-1">98% Cotton, 2% elastane</span>
                                            </li>
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Care</span>
                                                <span class="col-7 offset-1">Professional dry clean only. Do not
                                                    bleach.
                                                    Do not iron.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Delivery & Returns
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Delivery</span>
                                                <span class="col-7 offset-1">Standard delivery free for orders over
                                                    20000 PKR.
                                                    Next day delivery 5000 PKR</span>
                                            </li>
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Returns</span>
                                                <span class="col-7 offset-1">30 day return period. See our <a
                                                        class="text-link-border" href="#">terms &
                                                        conditions.</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Product Accordion-->
                    </div>
                </div>
            </div>
            <!-- / Product Information-->
        </div>
        <!-- / Product Top Section-->

        <div class="row g-0">

            <!-- Related Products-->
            <div class="col-12" data-aos="fade-up">
                <h3 class="fs-4 fw-bolder mt-7 mb-4">You May Also Like</h3>
                <!-- Swiper Latest -->
                <div class="swiper-container" data-swiper data-options='{
                        "spaceBetween": 10,
                        "loop": true,
                        "autoplay": {
                          "delay": 5000,
                          "disableOnInteraction": false
                        },
                        "navigation": {
                          "nextEl": ".swiper-next",
                          "prevEl": ".swiper-prev"
                        },   
                        "breakpoints": {
                          "600": {
                            "slidesPerView": 2
                          },
                          "1024": {
                            "slidesPerView": 3
                          },       
                          "1400": {
                            "slidesPerView": 4
                          }
                        }
                      }'>
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                        <div class="swiper-slide">
                            <!-- Card Product-->
                            <div
                                class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                <div class="card-img position-relative">
                                    <div class="card-badges">
                                        <span class="badge badge-card">
                                        </span>
                                    </div>
                                    <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i
                                            class="ri-heart-line"></i></span>
                                    <picture class="position-relative overflow-hidden d-block bg-light">

                                        @if ($product->images->isNotEmpty())
                                        <img style="min-height: 300px;"
                                            src="{{ asset($product->images->first()->image_url) }}" alt="Product Image"
                                            class="w-100 img-fluid position-relative z-index-10">
                                        @else
                                        <img style="height: 300px;" class="w-100 img-fluid position-relative z-index-10"
                                            title="" src="{{ asset('web/assets/images/product/placeholder.png') }}"
                                            alt="">
                                        @endif
                                    </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick
                                            Add</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a class="text-decoration-none link-cover" href="#">{{ $product->name }}</a>
                                    <p class="mt-2 mb-0 small price-text">
                                        Rs.{{ $product->price }}

                                        @if ($product->discount_price != null)
                                        Rs.<span class="text-danger">{{ $product->discount_price }}
                                        </span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <!--/ Card Product-->
                        </div>
                        @endforeach


                    </div>

                    <!-- Add Arrows -->
                    <div
                        class="swiper-prev top-50  start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                        <i class="ri-arrow-left-s-line ri-lg"></i>
                    </div>
                    <div
                        class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                        <i class="ri-arrow-right-s-line ri-lg"></i>
                    </div>


                </div>
                <!-- / Swiper Latest-->
            </div>
            <!-- / Related Products-->

            <!-- Reviews-->
            <div class="col-12" data-aos="fade-up">
                <h3 class="fs-4 fw-bolder mt-7 mb-4 reviews">Reviews</h3>

                <!-- Review Summary-->
                <div class="bg-light p-5 justify-content-between d-flex flex-column flex-lg-row">
                    <div class="d-flex flex-column align-items-center mb-4 mb-lg-0">
                        <div
                            class="bg-dark text-white f-w-24 f-h-24 d-flex rounded-circle align-items-center justify-content-center fs-2 fw-bold mb-3">
                            {{ $ratings->isNotEmpty() ? $ratings->avg('rating') : 'N/A' }}
                        </div>
                        <!-- Review Stars Medium-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars"
                                style="width: {{ ($ratings->isNotEmpty() ? ($ratings->avg('rating') / 5) * 100 : 0) }}%">
                                @for ($i = 0; $i < 5; $i++) <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    @endfor
                            </div>
                            <div class="stars">
                                @for ($i = 0; $i < 5; $i++) <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25">
                                    </i>
                                    @endfor
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-column ms-lg-8">
                        @php
                        $totalRatings = $ratings->count();
                        @endphp

                        @for ($rating = 5; $rating >= 1; $rating--)
                        @php
                        $ratingCount = $ratings->where('rating', $rating)->count();
                        $percentage = $totalRatings > 0 ? ($ratingCount / $totalRatings) * 100 : 0;
                        @endphp
                        <div class="d-flex align-items-center justify-content-start mb-2">
                            <div class="f-w-20">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: {{ ($rating / 5) * 100 }}%">
                                        @for ($i = 0; $i < 5; $i++) <i class="ri-star-fill text-dark mr-1"></i>
                                            @endfor
                                    </div>
                                    <div class="stars">
                                        @for ($i = 0; $i < 5; $i++) <i class="ri-star-fill mr-1 text-muted opacity-25">
                                            </i>
                                            @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                <div class="progress-bar bg-dark" role="progressbar" style="width: {{ $percentage }}%;"
                                    aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="fw-bold small d-block f-w-4 text-end">{{ $ratingCount }}</span>
                        </div>
                        @endfor
                        <p class="mt-3 mb-0 d-flex align-items-start"><i class="ri-chat-voice-line me-2"></i> {{
                            $totalRatings }} customer(s) have reviewed this product</p>
                    </div>
                </div><!-- / Review Summary-->

                <!-- Reviews-->
                <div class="row g-6 g-md-8 g-lg-10 my-3">
                    @foreach ($ratings as $review)
                    <div class="col-12 col-lg-6 col-xxl-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: {{ ($review->rating / 5) * 100 }}%">
                                    @for ($i = 0; $i < 5; $i++) <i class="ri-star-fill text-dark mr-1"></i>
                                        @endfor
                                </div>
                                <div class="stars">
                                    @for ($i = 0; $i < 5; $i++) <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        @endfor
                                </div>
                            </div>
                            <div class="text-muted small">{{ $review->created_at->format('jS F Y') }} by {{
                                $review->user->name }}</div>
                        </div>
                        <p class="fw-bold mb-2">{{ $review->title }}</p>
                        <p class="fs-7">{{ $review->comment }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- / Reviews-->
        </div>
    </div>
</section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize the wishlist state based on local storage
        var wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

        function updateHeartIcon(productId, heartIcon) {
            if (wishlist.includes(productId)) {
                heartIcon.classList.add('ri-heart-fill'); // Filled heart icon
                heartIcon.classList.remove('ri-heart-line');
            } else {
                heartIcon.classList.add('ri-heart-line'); // Outline heart icon
                heartIcon.classList.remove('ri-heart-fill');
            }
        }

        // Function to handle heart icon click
        function handleHeartClick(event) {
            var heartIcon = event.currentTarget.querySelector('i'); // Find the <i> tag inside the clicked span
            var productId = event.currentTarget.dataset.productId;
            if (!productId) return;

            console.log("Heart icon clicked. Product ID:", productId);

            var index = wishlist.indexOf(productId);
            if (index === -1) {
                // Add to wishlist
                wishlist.push(productId);
                console.log("Added to wishlist.");
            } else {
                // Remove from wishlist
                wishlist.splice(index, 1);
                console.log("Removed from wishlist.");
            }

            // Update local storage
            localStorage.setItem('wishlist', JSON.stringify(wishlist));

            // Update heart icon state
            updateHeartIcon(productId, heartIcon);
        }

        // Add event listener to all heart icons
        var heartIcons = document.querySelectorAll('.wishlist');
        heartIcons.forEach(function (icon) {
            icon.addEventListener('click', handleHeartClick);
        });

        // Initialize heart icons based on current wishlist
        heartIcons.forEach(function (icon) {
            var heartIcon = icon.querySelector('i'); // Find the <i> tag inside the span
            var productId = icon.dataset.productId;
            if (productId) {
                updateHeartIcon(productId, heartIcon);
            }
        });
    });
</script>