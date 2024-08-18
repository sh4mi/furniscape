<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Products Report</h2>
            <!-- PDF Generation Button -->
            <a href="{{ route('reports.products.pdf') }}" class="btn btn-dark">
                Generate PDF
            </a>
        </div>

        <table id="productsTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>SKU</th>
                    <th>Available</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>Rs.{{ $product->price }}</td>
                    <td>{{ $product->SKU }}</td>
                    <td>{{ $product->is_available ? 'Yes' : 'No' }}</td>
                    <td>{{ $product->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {
        $('#productsTable').DataTable();
    });
</script>
