<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('My Orders') }}
        </h2>
    </header>
    @if($orders->isEmpty())
    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 float-start">
        {{ __('Your order list is empty.') }}
    </p>
    @else 
    {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered text-center mydatatable" style="border: 1px solid #d1d5db;">
                    <thead>
                        <tr>
                            <th style="font-weight: 700;">Tracking Number</th>
                            <th style="font-weight: 700;">Total Price</th>
                            <th style="font-weight: 700;">Status</th>
                            <th style="font-weight: 700;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->tracking_no }}</td>
                            <td>Rs.{{ $order->total_price }}</td>
                            <td>{{ $order->status }}</td>
                            <td>
                                <a href="{{ url('view-order/'.$order->id) }}" class="btn btn-dark hover-lift-sm hover-boxshadow w-80">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    {{-- </div> --}}
    @endif
</section>
