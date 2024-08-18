@extends('web.layouts.app')

@section('content')
<style>
    .status-pending {
        background-color: #ffc107;
        color: #fff;
    }

    .status-ready-to-ship {
        background-color: #17a2b8;
        color: #fff;
    }

    .status-dispatched {
        background-color: #007bff;
        color: #fff;
    }

    .status-delivered {
        background-color: #0e892b;
        color: #fff;
    }

    .status-cancelled {
        background-color: #e31d1d;
        color: #fff;
    }

    .status-confirmed {
        background-color: #28a745;
        color: #fff;
    }
    .badge-warning {
        background-color: #ffc107;
        color: #fff;
    }

    .badge-success {
        background-color: #28a745;
        color: #fff;
    }

    .order-details {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 8px;
        background-color: #f9f9f9;
        margin-top: 20px;
    }

    .order-info p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .order-info .badge {
        font-size: 14px;
        padding: 5px 10px;
        display: inline-block;
        margin-top: 5px;
    }

    /* .list-unstyled li {
        background: #fff;
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    } */

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
    }

    .order-info strong {
        font-weight: bold;
        /* Ensure strong tags are bold */
    }
</style>

<section class="mt-4">
    <div class="container">
        <h1 class="mb-4">Track Your Order</h1>

        @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('search.order') }}" method="POST" class="mb-5">
            @csrf
            <div class="form-group">
                <input type="text" name="tracking_number" id="tracking_number" class="form-control"
                    placeholder="Enter Order Tracking Number" required>
            </div>
            <button type="submit" class="btn btn-dark mb-0 hover-lift-sm hover-boxshadow">Search</button>
        </form>

        @if(isset($order))
        <div class="order-details">
            <h2 class="mb-4">Order Details</h2>
            <div class="order-info">
                <p><strong>Order Number:</strong> {{ $order->number }}</p>
                <p><strong>Order Status:</strong>
                    <span class="badge status-{{ strtolower(str_replace(' ', '-', $order->status)) }}">
                        <i class="fa {{ $order->status_icon }}"></i> {{ $order->status }}
                    </span>
                </p>
                <p><strong>Payment Method:</strong> {{ $order->payment_method == 'cod' ? 'Cash On Delivery' : 'Cash On
                    Delivery'}}</p>
                <p><strong>Payment Status:</strong>
                    <span class="badge {{ $order->payment_status == 1 ? 'badge-success' : 'badge-warning' }}">
                        {{ $order->payment_status == 1 ? 'Received' : 'Pending' }}
                    </span>
                </p>
                <p><strong>Shipping Address:</strong> {{ $order->shipping_address }}</p>
                <p><strong>Billing Address:</strong> {{ $order->billing_address }}</p>
                <p><strong>Total Price:</strong> Rs.{{ $order->total_price }}</p>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection