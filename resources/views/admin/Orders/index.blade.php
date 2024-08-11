<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="border-bottom title-part-padding row">
            <h4 class="card-title mb-0">Orders</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive m-t-40">
                <table id="zero_config" class="table display table-bordered table-striped no-wrap">
                    <thead>
                        <tr>
                            <th>Tracking Number</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Payment Method</th>
                            <th>Payment Status</th>
                            <th>Total Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->tracking_no }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->payment_method }}</td>
                            <td>
                                @if($order->payment_status == 0)
                                    Pending
                                @elseif($order->payment_status == 1)
                                    Received
                                @else
                                    Unknown
                                @endif
                            </td>
                            <td>{{ number_format($order->total_price, 2) }} PKR</td>
                            <td>
                                <a href="{{ route('orders.edit', $order->id) }}" class="text-dark pe-2">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a onclick="deleteOrder({{ $order->id }})" class="text-dark">
                                    <i class="fa fa-trash"></i>
                                </a>
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
    function deleteOrder(orderId) {
        if (confirm('Are you sure you want to delete this order?')) {
            fetch('/orders/' + orderId, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
                .then(response => {
                    if (response.ok) {
                        // Category deleted successfully
                        window.location.reload(); // Refresh the page to reflect changes
                    } else {
                        // Error occurred while deleting category
                        alert('An error occurred while deleting the category.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while deleting the category.');
                });
        }
    }
</script>
