@extends('web.layouts.app')

@section('content')
<section class="mt-0 overflow-lg-hidden vh-lg-100">
    <!-- Breadcrumbs -->
    <div class="bg-dark py-6">
        <div class="container-fluid">
            <nav class="m-0" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item breadcrumb-light"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item breadcrumb-light"><a href="{{ url('cart') }}">Cart</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /Breadcrumbs -->

    <!-- Page Content -->
    <div class="container">
        @if($cartItems->count() > 0)
        <div class="row g-0 vh-lg-100">
            <div class="col-12 col-lg-8 pt-lg-6">
                <div class="pe-lg-5">
                    <h4 class="fw-bold">Your Cart</h4>
                    <div class="container">
                        <div class="card shadow">
                            <div class="card-body" style="background-color: #f8f9fa; border: 1px solid #ced4da; border-radius: 10px; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                                <!-- Heading Row -->
                                <div class="row align-items-center mb-4 text-center">
                                    <div class="col-md-2">
                                        <h6 class="fw-bold">Image</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="fw-bold">Name</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="fw-bold">Price</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="fw-bold">Quantity</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="fw-bold">Action</h6>
                                    </div>
                                </div>
                                <!-- /Heading Row -->

                                <!-- Cart Items -->
                                @php
                                    $total_price = 0;
                                    $total_items = count($cartItems);
                                @endphp
                                @foreach($cartItems as $item)
                                    <div class="row align-items-center mb-4 text-center product_data">
                                        <div class="col-md-2">
                                            @if ($item->variant)
                                                <img src="{{ asset($item->variant->images->first()->image_url) }}" class="img-fluid rounded" alt="Image" style="max-width: 70px; height: auto;">
                                                <input type="hidden" class="variant_id" value="{{ $item->variant->id }}">
                                            @else
                                                <img src="{{ $item->products->images->isNotEmpty() ? asset($item->products->images->first()->image_url) : 'Image' }}" class="img-fluid rounded" alt="Image" style="max-width: 70px; height: auto;">
                                            @endif
                                        </div>
                                        <div class="col-md-2">
                                            @if ($item->variant)
                                                <h6>{{ $item->variant->name }} - {{ $item->products->name }}</h6>
                                            @else
                                                <h6>{{ $item->products->name }}</h6>
                                            @endif
                                        </div>
                                        <div class="col-md-2">
                                            @if ($item->variant)
                                                @if ($item->variant->discount_price > 0)
                                                    <h6>Rs.{{ $item->variant->discount_price }}</h6>
                                                @else
                                                    <h6>Rs.{{ $item->variant->price }} </h6>
                                                @endif
                                            @else
                                                @if ($item->products->discount_price > 0)
                                                    <h6>Rs.{{ $item->products->discount_price }}</h6>
                                                @else
                                                    <h6>{Rs.{ $item->products->price }}</h6>
                                                @endif
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <input type="hidden" class="prod_id" value="{{ $item->product_id}}">
                                            <div class="input-group">
                                                <button type="button" id="decr-btn" class="btn btn-outline-secondary btn-sm decrement-btn changeQuantity">-</button>
                                                <input type="text" name="quantity" id="quant-inp" class="qty-input form-control form-control-sm text-center" value="{{ $item->product_quant }}" style="width: 70px;">
                                                <button type="button" id="incr-btn" class="btn btn-outline-secondary btn-sm increment-btn changeQuantity">+</button>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-trash deleteCartItem" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                              </svg>
                                        </div>
                                    </div>
                                @php
                                if ($item->variant) {
                                            if ($item->variant->discount_price > 0) {
                                                $total_price += $item->variant->discount_price * $item->product_quant;
                                            } else {
                                                $total_price += $item->variant->price * $item->product_quant;
                                            }
                                        } else {
                                            if ($item->products->discount_price > 0) {
                                                $total_price += $item->products->discount_price * $item->product_quant;
                                            } else {
                                                $total_price += $item->products->price * $item->product_quant;
                                            }
                                        }
                                @endphp
                                @endforeach
                                <!-- /Cart Items -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 bg-light pt-lg-6 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
                <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                    <h4 class="fw-bold">Cart Summary</h4>
                    <div class="card-body" style="background-color: #f8f9fa; border: 1px solid #ced4da; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                    <div class="row align-items-center mb-4 text-center">
                            <div class="col-6 text-start">
                                <h6>Total Items :</h6>
                                <h6>Total Price :</h6>
                            </div>
                            <div class="col-6 text-end">
                                <h6>{{ $total_items }}</h6>
                                <h6>Rs. {{ $total_price }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-dark hover-lift-sm hover-boxshadow w-100" onclick="window.location.href='{{ url('checkout') }}'">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="col-12 col-lg-12 bg-light pt-lg-6 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
            <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                <div class="card-body" style="background-color: #f8f9fa; border: 1px solid #ced4da; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                <div class="row mb-4">
                        <div class="col-6 mt-3 text-center">
                            <h2>YOUR CART IS EMPTY !</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ url('/')}}" class="btn btn-dark hover-lift-sm hover-boxshadow float-end">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!-- /Page Content -->
</section>
@endsection
