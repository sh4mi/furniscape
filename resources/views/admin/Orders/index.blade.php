<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div id="status-alert"></div>
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
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->tracking_no }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->payment_method }}</td>
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
                                    <a href="{{ route('orders.edit', $order->id) }}" class="text-dark pe-2">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            style="background: none; border: none; cursor: pointer; padding: 0;">
                                            <i data-feather="trash-2" class="feather-sm fill-white"></i>
                                        </button>
                                    </form>
                                    {{-- <a onclick="deleteOrder({{ $order->id }})" class="text-dark pe-2">
                                        <i class="fa fa-trash"></i>
                                    </a> --}}
                                    @if ($order->status == 'pending')
                                        <a href="javascript:void(0)"
                                            onclick="updateOrderStatus({{ $order->id }}, 'confirmed')"
                                            class="text-success pe-2">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        <a href="javascript:void(0)"
                                            onclick="updateOrderStatus({{ $order->id }}, 'cancelled')"
                                            class="text-danger pe-2">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
