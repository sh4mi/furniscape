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
<div class="ms-5 me-5">
    <form id="orderForm" action="{{ url('place-order') }}" method="POST">
        {{ csrf_field() }}
        <div class="row g-0 vh-lg-100">
            <div class="col-12 col-lg-7 pt-lg-6">
                <div class="pe-lg-1">
                    <h4 class="fw-bold">Basic Details</h4>
                    <div class="container">
                        <div class="card shadow">
                            <div class="card-body mt-2" style="background-color: #f8f9fa; border: 1px solid #ced4da; border-radius: 10px; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                                <div class="row checkout-form">
                                    <div class="col-md-6">
                                        <label for="fname" style="font-size: 12px; font-weight: 700;">First Name</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" id="fname" name="fname" class="form-control" placeholder="Enter First Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lname" style="font-size: 12px; font-weight: 700;">Last Name</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" id="lname" name="lname" class="form-control" placeholder="Enter Last Name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="email" style="font-size: 12px; font-weight: 700;">Email</label>
                                        <input type="email" style="font-size: 14px; padding: 5px; font-weight: 400;" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="phone" style="font-size: 12px; font-weight: 700;">Phone Number</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="shipping" style="font-size: 12px; font-weight: 700;">Shipping Address</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" id="shipping" name="shipping" class="form-control" placeholder="Enter Shipping Address" required>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="billing" style="font-size: 12px; font-weight: 700;">Billing Address</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" id="billing" name="billing" class="form-control" placeholder="Enter Billing Address">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="city" style="font-size: 12px; font-weight: 700;">City</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" id="city" name="city" class="form-control" placeholder="Enter City">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="state" style="font-size: 12px; font-weight: 700;">State</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" id="state" name="state" class="form-control" placeholder="Enter State">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="country" style="font-size: 12px; font-weight: 700;">Country</label>
                                        <input type="text" style="font-size: 14px; padding: 5px; font-weight: 400;" id="country" name="country" class="form-control" placeholder="Enter Country">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="zip" style="font-size: 12px; font-weight: 700;">Zip Code</label>
                                        <input type="number" style="font-size: 14px; padding: 5px; font-weight: 400;" id="zip" name="zip" class="form-control" placeholder="Enter Zip Code">
                                    </div>
                                    <h5 class="mt-3">Payment Method</h5>
                                    <div class="col-md-6 mt-3">
                                        <select id="payment_method" class="form-select form-select-sm" name="payment_method" required>
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
            <div class="col-12 col-lg-5 bg-light pt-lg-6 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
                <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                    <h4 class="fw-bold">Order Summary</h4>
                    <div class="card-body mt-3" style="background-color: #f8f9fa; border: 1px solid #ced4da; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
                        <div class="row align-items-center mb-4 text-center">
                            <table class="table table-bordered ms-2">
                                <thead>
                                    <tr>
                                        <th style="font-weight: 700;">Name</th>
                                        <th style="font-weight: 700;">Price</th>
                                        <th style="font-weight: 700;">Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartItems as $item)
                                    <tr>
                                        @if ($item->variant)
                                            <td>{{ $item->variant->name }} - {{ $item->products->name }}</td>
                                            <td>Rs.{{ $item->variant->discount_price > 0 ? $item->variant->discount_price : $item->variant->price }}</td>
                                        @else
                                            <td>{{ $item->products->name }}</td>
                                            <td>Rs.{{ $item->products->discount_price > 0 ? $item->products->discount_price : $item->products->price }}</td>
                                        @endif
                                        <td>{{ $item->product_quant }}</td>
                                    </tr>
                                    @endforeach                                
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark hover-lift-sm hover-boxshadow w-100">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</section>
@endsection
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('orderForm');
    const placeOrderButton = document.querySelector('button[type="submit"]');

    placeOrderButton.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default button action

        let isValid = true;

        // Clear previous errors
        const errors = document.querySelectorAll('.error');
        errors.forEach(error => error.remove());

        const formControls = document.querySelectorAll('.form-control');
        formControls.forEach(control => control.classList.remove('is-invalid'));

        // Validate required fields
        const requiredFields = {
            'fname': 'First Name',
            'email': 'Email',
            'phone': 'Phone Number',
            'shipping': 'Shipping Address',
            'payment_method': 'Payment Method'
        };

        for (const [id, label] of Object.entries(requiredFields)) {
            const field = document.getElementById(id);
            if (!field.value.trim()) {
                const error = document.createElement('div');
                error.className = 'error text-danger';
                error.style = 'font-size: 14px; padding: 5px; font-weight: 400;';
                error.textContent = `${label} is required.`;
                field.parentNode.appendChild(error);
                field.classList.add('is-invalid');
                isValid = false;
            }
        }

        // Validate Email
        const email = document.getElementById('email');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value && !emailPattern.test(email.value)) {
            const error = document.createElement('div');
            error.className = 'error text-danger';
            error.style = 'font-size: 14px; padding: 5px; font-weight: 400;';
            error.textContent = 'Invalid email format.';
            email.parentNode.appendChild(error);
            email.classList.add('is-invalid');
            isValid = false;
        }

        // Validate Phone Number
        const phone = document.getElementById('phone');
        if (phone.value && isNaN(phone.value)) {
            const error = document.createElement('div');
            error.className = 'error text-danger';
            error.textContent = 'Phone Number must be a number.';
            phone.parentNode.appendChild(error);
            phone.classList.add('is-invalid');
            isValid = false;
        }

        // If valid, submit the form
        if (isValid) {
            form.submit(); // Submit the form
        }
    });
});
</script>