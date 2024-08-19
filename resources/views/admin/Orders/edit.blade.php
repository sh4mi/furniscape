<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Order') }}
        </h2>
    </x-slot>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('orders.update', $order->id) }}">
                        @csrf

                        <div class="form-body">
                            <h5 class="card-title">Edit Order #{{ $order->number }}</h5>
                            <hr>
                            <div class="row">
                                <!-- User ID -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="user_id" class="form-label">User ID</label>
                                        <input type="text" class="form-control" id="user_id" name="user_id"
                                            value="{{ $order->user_id }}" required>
                                    </div>
                                </div>
                                <!-- Order Number -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="number" class="form-label">Order Number</label>
                                        <input type="text" class="form-control" id="number" name="number"
                                            value="{{ $order->number }}" required>
                                    </div>
                                </div>
                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <!-- <input type="text" class="form-control" id="status" name="status"
                                            value="{{ $order->status }}" required> -->
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : ''
                                                }}>Pending</option>
                                            <option value="confirmed" {{ $order->status == 'confirmed' ? 'selected' : ''
                                                }}>Confirmed</option>
                                            <option value="dispatched" {{ $order->status == 'dispatched' ? 'selected' :
                                                '' }}>Dispatched</option>
                                            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : ''
                                                }}>Cancelled</option>
                                            <option value="refunded" {{ $order->status == 'refunded' ? 'selected' : ''
                                                }}>Refunded</option>
                                            <option value="completed" {{ $order->status == 'completed' ? 'selected' : ''
                                                }}>Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Payment Method -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="payment_method" class="form-label">Payment Method</label>
                                        <input type="text" class="form-control" id="payment_method"
                                            name="payment_method" value="{{ $order->payment_method }}" required>
                                    </div>
                                </div>
                                <!-- Payment Status -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="payment_status" class="form-label">Payment Status</label>
                                        <select class="form-select" id="payment_status" name="payment_status" required>
                                            <option value="0" {{ $order->payment_status == 0 ? 'selected' : ''
                                                }}>Pending</option>
                                            <option value="1" {{ $order->payment_status == 1 ? 'selected' : ''
                                                }}>Received</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Total Price -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="total_price" class="form-label">Total Price</label>
                                        <input type="number" step="0.01" class="form-control" id="total_price"
                                            name="total_price"
                                            value="{{ number_format($order->total_price, 2, '.', '') }}" required>
                                    </div>
                                </div>
                                <!-- Shipping Address -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="shipping_address" class="form-label">Shipping Address</label>
                                        <textarea class="form-control" id="shipping_address" name="shipping_address"
                                            rows="3" required>{{ $order->shipping_address }}</textarea>
                                    </div>
                                </div>
                                <!-- Billing Address -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="billing_address" class="form-label">Billing Address</label>
                                        <textarea class="form-control" id="billing_address" name="billing_address"
                                            rows="3" required>{{ $order->billing_address }}</textarea>
                                    </div>
                                </div>
                                <!-- Tracking Number -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="tracking_no" class="form-label">Tracking Number</label>
                                        <input type="text" class="form-control" id="tracking_no" name="tracking_no"
                                            value="{{ $order->tracking_no }}">
                                    </div>
                                </div>
                            </div>

                            <!-- Order Items -->
                            <h5 class="card-title mt-4">Order Items</h5>
                            <hr>
                            <div class="mb-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            {{-- <th>Actions</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody id="order-items">
                                        @foreach($order->orderItems as $item)
                                        @php
                                        $variant = $item->variant;
                                        $product = $item->products;
                                        @endphp
                                        <tr data-id="{{ $item->id }}">
                                            @if ($variant)
                                            <td>
                                                <input type="text" class="form-control"
                                                    value="{{ $variant->name }} - {{ $product->name }}" readonly>
                                            </td>
                                            @else
                                            <td>
                                                <input type="text" class="form-control" value="{{ $product->name }}"
                                                    readonly>
                                            </td>
                                            @endif
                                            <td>
                                                <input type="number" name="order_items[{{ $item->id }}][quantity]"
                                                    class="form-control" value="{{ $item->quantity }}" readonly>
                                            </td>
                                            <td>
                                                <input type="number" step="0.01"
                                                    name="order_items[{{ $item->id }}][price]" class="form-control"
                                                    value="{{ number_format($item->price, 2, '.', '') }}" readonly>
                                            </td>
                                            {{-- <td>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="removeItem(this)">Remove</button>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- <button type="button" class="btn btn-primary" onclick="addItem()">Add Item</button>
                                --}}
                            </div>
                        </div>
                        <!-- Form Actions -->
                        <div class="form-actions mt-4">
                            <button type="submit" class="btn btn-success rounded-pill px-4">Update Order</button>
                            <a href="{{ route('orders.index') }}" class="btn btn-dark rounded-pill px-4">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <script>
        function removeItem(button) {
            // Remove the item row
            button.closest('tr').remove();
        }

        // function addItem() {
        //     const tbody = document.getElementById('order-items');
        //     const rowCount = tbody.rows.length;
        //     const newRow = document.createElement('tr');
        //     newRow.innerHTML = `
        //         <td><input type="text" name="order_items[new][product_id]" class="form-control" required>
        //         <input type="hidden" name="order_items[new][variant_id]" value="">
        //         <input type="text" class="form-control" name="order_items[new][name]" value="" readonly></td>
        //         <td><input type="number" name="order_items[new][quantity]" class="form-control" required></td>
        //         <td><input type="number" step="0.01" name="order_items[new][price]" class="form-control" required></td>
        //         <td><button type="button" class="btn btn-danger btn-sm" onclick="removeItem(this)">Remove</button></td>
        //     `;
        //     tbody.appendChild(newRow);
        // }
    </script>
</x-app-layout>