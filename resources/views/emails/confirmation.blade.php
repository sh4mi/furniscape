<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .header {
            background: #c8b89f !important;
            color: black;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .header2 {
            color: black;
            padding: 20px;
            text-align: left;
        }

        .header h3 {
            margin: 0;
            font-size: 18px;
        }

        .section {
            margin: 20px 0;
        }

        .section h2 {
            font-size: 18px;
            margin: 0 0 10px 0;
        }

        .section p {
            margin: 0 0 10px 0;
            line-height: 1.6;
        }

        .order-details {
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 0;
            margin: 20px 0;
        }

        .order-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-details th,
        .order-details td {
            border: 1px solid #e0e0e0;
            padding: 8px;
            text-align: left;
        }

        .order-details th {
            background: #f9f9f9;
        }

        .footer {
            font-size: 12px;
            color: #999;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Furniscape</h1>
        </div>
        <div class="header2">
            <h3>Order Confirmed</h3>
        </div>
        <div class="section">
            <p>Dear {{ $userName }},</p>
            <p>Thank you for your order! Here are the details of your purchase:</p>
        </div>
        <div class="section">
            <h2>Order Summary</h2>
            <p><strong>Order Number:</strong> {{ $orderNumber }}</p>
            <p><strong>Shipping Address:</strong> {{ $shippingAddress }}</p>
            <p><strong>Billing Address:</strong> {{ $billingAddress }}</p>
            <p><strong>Payment Method:</strong> {{ $paymentMethod }}</p>
            <p><strong>Total Price:</strong> {{ number_format($totalPrice, 2) }}PKR</p>
        </div>
        <div class="order-details">
            <h2>Order Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Variant</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderItems as $item)
                    <tr>
                        <td>{{ $item['product_name'] }}</td>
                        <td>{{ $item['variant_name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ number_format($item['price'], 2) }}PKR</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Furniscape. All rights reserved.</p>
        </div>
    </div>
</body>

</html>