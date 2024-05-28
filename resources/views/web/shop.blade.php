@extends('web.layouts.app')
@section('content')
<section class="mt-0">

    <div class="container-fluid" data-aos="fade-in">
        <!-- Category Toolbar-->
        <div class="d-flex justify-content-between items-center pt-5 pb-4 flex-column flex-lg-row">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        @if(request()->has('category') && request()->category != null)
                        <li class="breadcrumb-item active" aria-current="page">{{request()->category}}</li>
                        @endif
                    </ol>
                </nav>
                @if(request()->has('category') && request()->category != null)
                <h1 class="fw-bold fs-3 mb-2">{{request()->category}}</h1>
                @else
                <h1 class="fw-bold fs-3 mb-2">New Products</h1>
                @endif


            </div>
            <div class="d-flex justify-content-end align-items-center mt-4 mt-lg-0 flex-column flex-md-row">

                <!-- Filter Trigger-->
                <button
                    class="btn bg-light p-3 me-md-3 d-flex align-items-center fs-7 lh-1 w-100 mb-2 mb-md-0 w-md-auto "
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
                    aria-controls="offcanvasFilters">
                    <i class="ri-equalizer-line me-2"></i> Filters
                </button>
                <!-- / Filter Trigger-->

                <!-- Sort Options-->
                <select class="form-select form-select-sm border-0 bg-light p-3 pe-5 lh-1 fs-7">
                    <option selected>Sort By</option>
                    <option value="1">Hi Low</option>
                    <option value="2">Low Hi</option>
                    <option value="3">Name</option>
                </select>
                <!-- / Sort Options-->
            </div>
        </div> <!-- /Category Toolbar-->

        <!-- Products-->
        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-12 col-sm-6 col-lg-4">
                <!-- Card Product-->
                <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                    <div class="card-img position-relative">
                        <div class="card-badges">
                            <span class="badge badge-card"><span
                                    class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span>
                        </div>
                        <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i
                                class="ri-heart-line"></i></span>
                        <picture class="position-relative overflow-hidden d-block bg-light">
                            @if ($product->images->isNotEmpty())
                            <img style="min-height: 300px;" src="{{ asset($product->images->first()->image_url) }}"
                                alt="Product Image" class="w-100 img-fluid position-relative z-index-10">
                            @else
                            <img style="height: 300px;" class="w-100 img-fluid position-relative z-index-10" title=""
                                src="{{asset('web/assets/images/product/placeholder.png')}}" alt="">
                            @endif
                        </picture>
                        <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                            <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <a class="text-decoration-none link-cover"
                            href="{{ route('product', ['id' => $product->id]) }}">{{$product->name}}</a>
                        <small class="text-muted d-block">4 colours, 10 sizes</small>
                        <p class="mt-2 mb-0 small">
                            @if($product->discount_price != null)
                            <s class="text-muted">PKR {{$product->discount_price}}</s>
                            @endif
                            <span class="text-danger">PKR {{$product->price}}</span>
                        </p>
                    </div>
                </div>
                <!--/ Card Product-->
            </div>
            @endforeach
        </div>
        <!-- / Products-->

        <!-- Pagination-->
        <div class="row mt-5">
            <div class="col-12 col-sm-12">
                {{ $products->withQueryString()->links() }}
            </div>
        </div> <!-- / Pagination-->
    </div>

    <!-- /Page Content -->
</section>
@endsection