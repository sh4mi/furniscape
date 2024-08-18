<!DOCTYPE html>
<html>
<head>
    <title>Orders Report</title>
    <style>
        body { font-family: 'Helvetica', sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Orders Report</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Order Number</th>
                <th>User</th>
                <th>Total</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->tracking_no }}</td>
                <td>{{ $order->user->name }}</td>
                <td>Rs.{{ $order->total_price }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
