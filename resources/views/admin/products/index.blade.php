<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="border-bottom title-part-padding row">
            <div class="col">
            <h4 class="card-title mb-0">Products</h4>
            </div>
            <div class="col d-flex justify-content-end">
           <a class="btn btn-danger text-white ms-3 d-none d-md-block" href="#">Add Product</a>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive m-t-40">
                <table id="zero_config" class="table display table-bordered table-striped no-wrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>SKU</th>
                            <th>Dimensions</th>
                            <th>Material</th>
                            <th>Weight</th>
                            <th>Featured</th>
                            <th>Available</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->SKU }}</td>
                            <td>{{ $product->dimensions }}</td>
                            <td>{{ $product->material }}</td>
                            <td>{{ $product->weight }}</td>
                            <td>{{ $product->is_featured ? 'Yes' : 'No' }}</td>
                            <td>{{ $product->is_available ? 'Yes' : 'No' }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount_price }}</td>
                            <td>
                                <a href="#" class="text-dark pe-2">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a onclick="#" class="text-dark">
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
