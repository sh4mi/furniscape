<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Orders Report</h2>
            <!-- PDF Generation Button -->
            <a href="{{ route('reports.orders.pdf') }}" class="btn btn-dark">
                Generate PDF
            </a>
        </div>

        <table id="ordersTable" class="table table-striped">
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
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {
        $('#ordersTable').DataTable();
    });
</script>
