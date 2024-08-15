@extends('web.layouts.app')
@section('content')
    <section class="mt-0">
        <!-- Breadcrumbs -->
        <div class="bg-dark py-6">
            <div class="container-fluid">
                <nav class="m-0" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item breadcrumb-light"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item breadcrumb-light"><a href="{{ url('/account') }}">My Orders</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /Breadcrumbs -->

        <!-- Page Content -->
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <!-- First Card -->
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">View Order</h3>
                            <a href="{{ url('account') }}" class="btn btn-dark hover-lift-sm hover-boxshadow">Back</a>
                        </div>
                        <div class="card-body"
                            style="background-color: #f8f9fa; border: 1px solid #ced4da; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                            <div class="row">
                                <div class="col-md-6 me-4">
                                    <h4>Shipping Details</h4>
                                    <hr>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label for="" style="font-size: 12px; font-weight: 700;">First
                                                Name</label>
                                            <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;"
                                                value="{{ Auth::user()->first_name }}" name="fname" class="form-control"
                                                placeholder="Enter First Name">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="" style="font-size: 12px; font-weight: 700;">Last
                                                Name</label>
                                            <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;"
                                                value="{{ Auth::user()->last_name }}" name="lname" class="form-control"
                                                placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="" style="font-size: 12px; font-weight: 700;">Email</label>
                                            <input type="email" style="font-size: 14px; padding: 5px; font-weight: 400;"
                                                value="{{ Auth::user()->email }}" name="email" class="form-control"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="" style="font-size: 12px; font-weight: 700;">Phone
                                                Number</label>
                                            <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;"
                                                value="{{ Auth::user()->phone_number }}" name="phone" class="form-control"
                                                placeholder="Enter Phone Number">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="" style="font-size: 12px; font-weight: 700;">Shipping
                                                Address</label>
                                            <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;"
                                                value="{{ Auth::user()->shipping_address . ',' . Auth::user()->billing_address . ',' . Auth::user()->city . ',' . Auth::user()->state . ',' . Auth::user()->country }}"
                                                name="shipping" class="form-control" placeholder="Enter Shipping Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h4 class="mt-0">Order Details</h4>
                                    <hr class="mt-1 mb-3">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center mydatatable"
                                            style="border: 1px solid #d1d5db;">
                                            <thead>
                                                <tr>
                                                    <th style="font-weight: 700;">Name</th>
                                                    <th style="font-weight: 700;">Quantity</th>
                                                    <th style="font-weight: 700;">Price</th>
                                                    <th style="font-weight: 700;">Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $grandTotal = 0;
                                                @endphp
                                                @foreach ($orders as $order)
                                                    @foreach ($order->orderItems as $item)
                                                        @php
                                                            $itemTotal = $item->price * $item->quantity;
                                                            $grandTotal += $itemTotal;
                                                            $product = $item->products;
                                                            $variant = $item->variant;
                                                        @endphp
                                                        <tr>
                                                            @if ($variant)
                                                                <td>{{ $variant->name }} - {{ $product->name }}</td>
                                                                <td>{{ $item->quantity }}</td>
                                                                <td>Rs.{{ $item->price }}</td>
                                                                <td>
                                                                    <img src="{{ $variant->images->isNotEmpty() ? asset($variant->images->first()->image_url) : 'path_to_default_image_or_placeholder' }}"
                                                                        class="img-fluid rounded" alt="Image"
                                                                        style="max-width: 70px; height: auto;">
                                                                </td>
                                                            @else
                                                                <td>{{ $item->products->name }}</td>
                                                                <td>{{ $item->quantity }}</td>
                                                                <td>Rs.{{ $item->price }}</td>
                                                                <td>
                                                                    <img src="{{ $item->products->images->isNotEmpty() ? asset($item->products->images->first()->image_url) : 'Image' }}"
                                                                        class="img-fluid rounded" alt="Image"
                                                                        style="max-width: 70px; height: auto;">
                                                                </td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <h4 class="px-2 mt-3">Grand Total: <span class="float-end">{{ $grandTotal }}
                                            PKR</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second Card: Rating and Review -->
                    @if ($order->status == 'delivered')
                        <h4 class="mt-4">Rate and Review Your Order</h4>
                        <div class="card">
                            <div class="card-body"
                                style="background-color: #f8f9fa; border: 1px solid #ced4da; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                                <form action="{{ route('ratings.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="rating">Rating:</label>
                                        <div class="star-rating">
                                            <input type="radio" name="rating" id="star5" value="5"><label
                                                for="star5" title="5 stars"><i class="fas fa-star"></i></label>
                                            <input type="radio" name="rating" id="star4" value="4"><label
                                                for="star4" title="4 stars"><i class="fas fa-star"></i></label>
                                            <input type="radio" name="rating" id="star3" value="3"><label
                                                for="star3" title="3 stars"><i class="fas fa-star"></i></label>
                                            <input type="radio" name="rating" id="star2" value="2"><label
                                                for="star2" title="2 stars"><i class="fas fa-star"></i></label>
                                            <input type="radio" name="rating" id="star1" value="1"><label
                                                for="star1" title="1 star"><i class="fas fa-star"></i></label>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="comment">Comment:</label>
                                        <textarea name="comment" id="comment" class="form-control" rows="4"></textarea>
                                    </div>
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>
        <!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Add some custom CSS for star rating -->
<style>
    .star-rating {
        direction: rtl;
        display: inline-block;
    }
    .star-rating input[type="radio"] {
        display: none;
    }
    .star-rating label {
        color: #ddd;
        font-size: 2rem;
        padding: 0;
        cursor: pointer;
    }
    .star-rating input[type="radio"]:checked ~ label {
        color: #f5b301;
    }
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: #f5b301;
    }
</style>
        <!-- /Page Content -->
    </section>
@endsection
