<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1>Furniscape Dashboard</h1>
    <!-- ============================================================== -->
    <!-- Manage Table & Walet Cards Section  -->
    <!-- ============================================================== -->
    <section class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pending Orders</h5>
                        <p class="card-text">{{ $pendingOrders }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Delivered Orders</h5>
                        <p class="card-text">{{ $deliveredOrders }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Canceled Orders</h5>
                        <p class="card-text">{{ $canceledOrders }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
