<style>
    /* Center align the select box text within the table cell */
    .delivery-select {
        height: calc(1.5em + .75rem + 2px);
        /* Adjust to match other text height */
        width: 100%;
        line-height: normal;
        text-align: center;
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
    }

    /* Ensure all table cells are vertically centered */
    .table td {
        vertical-align: middle;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div id="status-alert"></div>
        <div class="border-bottom title-part-padding row">
            <h4 class="card-title mb-0">Manage Delivery</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive m-t-40">
                <table id="zero_config" class="table display table-bordered table-striped no-wrap">
                    <thead>
                        <tr>
                            <th>Tracking Number</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Shipping Address</th>
                            <th>Billing Address</th>
                            <th>Payment Status</th>
                            <th>Total Price</th>
                            <th>Delivery Person</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->tracking_no }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->shipping_address }}</td>
                                <td>{{ $order->billing_address }}</td>
                                <td>
                                    @if ($order->payment_status == 0)
                                        Pending
                                    @elseif($order->payment_status == 1)
                                        Received
                                    @else
                                        Unknown
                                    @endif
                                </td>
                                <td>{{ number_format($order->total_price, 2) }} PKR</td>
                                <td>
                                    <select class="form-select delivery-select"
                                        onchange="assignDeliveryPerson(this, {{ $order->id }})">
                                        <option value="">Select Delivery Person</option>
                                        @foreach ($riders as $rider)
                                            <option value="{{ $rider->id }}"
                                                {{ $order->rider_id == $rider->id ? 'selected' : '' }}>
                                                {{ $rider->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function assignDeliveryPerson(selectElement, orderId) {
        var riderId = selectElement.value;

        if (riderId) {
            fetch(`orders/${orderId}/assign-rider`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        rider_id: riderId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Create Bootstrap success alert
                        var alertHtml = `
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Delivery person assigned and order status updated to dispatched.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;

                        // Append the alert to a placeholder element
                        document.getElementById('status-alert').innerHTML = alertHtml;
                        setTimeout(function() {
                            window.location.reload();
                        }, 3000);
                    } else {
                        alert('Failed to update the order. Please try again.');
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    }
</script>
