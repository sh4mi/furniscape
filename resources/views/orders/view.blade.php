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
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">View Order</h3>
                        <a href="{{ url('account')}}" class="btn btn-dark hover-lift-sm hover-boxshadow">Back</a>
                    </div>
                    <div class="card-body" style="background-color: #f8f9fa; border: 1px solid #ced4da; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                        <div class="row">
                            <div class="col-md-6 me-4">
                                <h4>Shipping Details</h4>
                                <hr>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label for="" style="font-size: 12px; font-weight: 700;">First Name</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->first_name}}" name="fname" class="form-control" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Last Name</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->last_name}}" name="lname" class="form-control" placeholder="Enter Last Name">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Email</label>
                                        <input type="email" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->email}}" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Phone Number</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->phone_number}}" name="phone" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="" style="font-size: 12px; font-weight: 700;">Shipping Address</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" value="{{ Auth::user()->shipping_address . ',' . Auth::user()->billing_address  . ',' . Auth::user()->city  . ',' . Auth::user()->state  . ',' . Auth::user()->country }}" name="shipping" class="form-control" placeholder="Enter Shipping Address">
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-5">
                                <h4 class="mt-0">Order Details</h4>
                                <hr class="mt-1 mb-3">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center mydatatable" style="border: 1px solid #d1d5db;">
                                        <thead>
                                            <tr>
                                                <th style="font-weight: 700;">Name</th>
                                                <th style="font-weight: 700;">Quantity</th>
                                                <th style="font-weight: 700;">Price</th>
                                                <th style="font-weight: 700;">Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                                @foreach($order->orderItems as $item)
                                                    <tr>
                                                        <td>{{ $item->products->name }}</td>
                                                        <td>{{ $item->quantity }} PKR</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>
                                                            <img src="{{ $item->products->images->isNotEmpty() ? asset($item->products->images->first()->image_url) : 'path_to_default_image_or_placeholder' }}" class="img-fluid rounded" alt="Image" style="max-width: 70px; height: auto;">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="px-2 mt-3">Grand Total: <span class="float-end">{{ $orders[0]['total_price'] }}</span></h4>
                            </div>                                                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</section>
@endsection
