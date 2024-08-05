@extends('web.layouts.app')

@section('content')
<section class="mt-0">
    <!-- Breadcrumbs -->
    <div class="bg-dark py-6">
        <div class="container-fluid">
            <nav class="m-0" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item breadcrumb-light"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item breadcrumb-light"><a href="{{ url('checkout') }}">Checkout</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /Breadcrumbs -->

    <!-- Page Content -->
    <div class="container">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
        <div class="row g-0 vh-lg-100">
            <div class="col-12 col-lg-8 pt-lg-6">
                <div class="pe-lg-5">
                    <h4 class="fw-bold">Basic Details</h4>
                    <div class="container">
                        <div class="card shadow">
                            <div class="card-body mt-2" style="background-color: #f8f9fa; border: 1px solid #ced4da; border-radius: 10px; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                                <div class="row checkout-form">
                                    <div class="col-md-6">
                                        <label for="" style="font-size: 12px; font-weight: 700;">First Name</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->first_name}}" name="fname" class="form-control" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Last Name</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->last_name}}" name="lname" class="form-control" placeholder="Enter Last Name">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Email</label>
                                        <input type="email" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->email}}" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Phone Number</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->phone_number}}"name="phone" class="form-control" placeholder="Enter Phone Number">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Shipping Address</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->shipping_address}}" name="shipping" class="form-control" placeholder="Enter Shipping Address">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Billing Address</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->billing_address}}" name="billing" class="form-control" placeholder="Enter Billing Address">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">City</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->city}}" name="city" class="form-control" placeholder="Enter City">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">State</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->state}}" name="state" class="form-control" placeholder="Enter State">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Country</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->country}}" name="country" class="form-control" placeholder="Enter Country">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Zip Code</label>
                                        <input type="number" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->zip_code}}" name="zip" class="form-control" placeholder="Enter Zip Code">
                                    </div>
                                    <h5 class="mt-3">Payment Method</h5>
                                    <div class="col-md-6 mt-3">
                                        <select class="form-select form-select-sm" name="payment_method">
                                            <option selected>Choose Payment Method</option>
                                            <option value="cod">Cash On Delivery</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 bg-light pt-lg-6 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
                <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                    <h4 class="fw-bold">Order Summary</h4>
                    <div class="card-body mt-3" style="background-color: #f8f9fa; border: 1px solid #ced4da; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                        <div class="row align-items-center mb-4 text-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="font-weight: 700;">Name</th>
                                        <th style="font-weight: 700;">Quantity</th>
                                        <th style="font-weight: 700;">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cartItems as $item)
                                <tr>
                                    <td>{{$item->products->name}}</td>
                                    <td>{{$item->product_quant}}</td>
                                    @if ($item->products->discount_price > 0)
                                    <td>{{$item->products->discount_price}}</td>
                                    @else
                                    <td>{{$item->products->price}}</td>
                                    @endif
                                    {{-- <td>{{$item->products->price}}</td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-dark hover-lift-sm hover-boxshadow w-100" onclick="window.location.href='{{ url('checkout') }}'">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- /Page Content -->
</section>
@endsection