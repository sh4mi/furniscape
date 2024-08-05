<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- product create page -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h5 class="card-title">Add Product</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter product name" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Enter product description"
                                            rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-select" id="category_id" name="category_id" required>
                                            <option value="">Select category</option>
                                            <!-- Loop through categories to populate options -->
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            placeholder="Enter quantity" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" class="form-control" id="sku" name="sku"
                                            placeholder="Enter SKU">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dimensions" class="form-label">Dimensions</label>
                                        <input type="text" class="form-control" id="dimensions" name="dimensions"
                                            placeholder="Enter dimensions">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="material" class="form-label">Material</label>
                                        <input type="text" class="form-control" id="material" name="material"
                                            placeholder="Enter material">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Weight</label>
                                        <input type="number" class="form-control" id="weight" name="weight"
                                            placeholder="Enter weight">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="is_featured"
                                            name="is_featured" value="1">
                                        <label class="form-check-label" for="is_featured">Featured Product</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="is_available"
                                            name="is_available" checked value="1">
                                        <label class="form-check-label" for="is_available">Available</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            placeholder="Enter price" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="discount_price" class="form-label">Discount Price
                                            (optional)</label>
                                        <input type="number" class="form-control" id="discount_price"
                                            name="discount_price" placeholder="Enter discount price">
                                    </div>
                                </div>
                                <!-- Image Upload -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="images" class="form-label">Product Images</label>
                                        <input type="file" class="form-control" id="images" name="images[]"
                                            multiple>
                                    </div>
                                </div>

                            </div>
                            <!-- Variants Section -->
                            <div id="variants-section">
                                <h5>Product Variants</h5>
                                <div id="variants">
                                    <!-- Variant fields will be dynamically added here -->
                                </div>
                                <button type="button" id="addVariant" class="btn btn-primary mt-2">Add
                                    Variant</button>
                            </div>
                            <div class="form-actions mt-2">
                                <button type="submit" class="btn btn-success rounded-pill px-4"> Save</button>
                                <button type="button" class="btn btn-dark rounded-pill px-4">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</x-app-layout>
<script>
    var variantCount = 0; // Initialize variant count

    // Function to add variant fields
    function addVariantFields() {
        var variantDiv = document.createElement('div');
        variantDiv.classList.add('variant');
        variantDiv.innerHTML = `
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <label class="control-label">Variant Name</label>
                    <input type="text" class="form-control" name="variants[${variantCount}][name]" placeholder="Variant Name" required>
                </div>
                <div class="col-md-6">
                    <label class="control-label">Color</label>
                    <input type="text" class="form-control" name="variants[${variantCount}][color]" placeholder="Color" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label class="control-label">Price</label>
                    <input type="number" class="form-control" name="variants[${variantCount}][price]" placeholder="Price" required>
                </div>
                <div class="col-md-6">
                    <label class="control-label">Discount Price (optional)</label>
                    <input type="number" class="form-control" name="variants[${variantCount}][discount_price]" placeholder="Discount Price">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label class="control-label">Variant Images (optional)</label>
                    <input type="file" class="form-control" name="variants[${variantCount}][images][]" multiple>
                </div>
            </div>
        `;
        document.getElementById('variants').appendChild(variantDiv);
        variantCount++; // Increment variant count
    }

    // Event listener for the "Add Variant" button
    document.getElementById('addVariant').addEventListener('click', function() {
        addVariantFields();
    });
</script>

