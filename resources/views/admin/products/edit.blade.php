<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-body">
                            <h5 class="card-title">Edit Product</h5>
                            <hr>
                            <div class="row">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $product->name }}" required>
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3"
                                            required>{{ $product->description }}</textarea>
                                    </div>
                                </div>
                                <!-- Category -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-select" id="category_id" name="category_id" required>
                                            <option value="">Select category</option>
                                            <!-- Loop through categories to populate options -->
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id ==
                                                $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- Quantity -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            value="{{ $product->quantity }}" required>
                                    </div>
                                </div>
                                <!-- SKU -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" class="form-control" id="sku" name="sku"
                                            value="{{ $product->sku }}">
                                    </div>
                                </div>
                                <!-- Dimensions -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dimensions" class="form-label">Dimensions</label>
                                        <input type="text" class="form-control" id="dimensions" name="dimensions"
                                            value="{{ $product->dimensions }}">
                                    </div>
                                </div>
                                <!-- Material -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="material" class="form-label">Material</label>
                                        <input type="text" class="form-control" id="material" name="material"
                                            value="{{ $product->material }}">
                                    </div>
                                </div>
                                <!-- Weight -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Weight</label>
                                        <input type="number" class="form-control" id="weight" name="weight"
                                            value="{{ $product->weight }}">
                                    </div>
                                </div>
                                <!-- is_featured -->
                                <div class="col-md-6">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="is_featured"
                                            name="is_featured" value="1" {{ $product->is_featured ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_featured">Featured Product</label>
                                    </div>
                                </div>
                                <!-- is_available -->
                                <div class="col-md-6">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="is_available"
                                            name="is_available" value="1" {{ $product->is_available ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_available">Available</label>
                                    </div>
                                </div>
                                <!-- Price -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            value="{{ $product->price }}" required>
                                    </div>
                                </div>
                                <!-- Discount Price -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="discount_price" class="form-label">Discount Price (optional)</label>
                                        <input type="number" class="form-control" id="discount_price"
                                            name="discount_price" value="{{ $product->discount_price }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="images" class="form-label">Product Images</label>
                                        <input type="file" class="form-control" id="images" name="images[]" multiple>
                                    </div>
                                </div>

                                <div class="col-md-6">


                                    @foreach($product->images as $image)
                                    <div class="col-md-3 mb-3">
                                        <img src="{{ asset($image->image_url) }}" alt="Product Image" class="img-fluid">
                                    </div>
                                    @endforeach



                                </div>

                            </div>
                            <!-- Variants Section -->
                            <div id="variants-section">
                                <h5>Product Variants</h5>
                                <div id="variants">
                                    <!-- Loop through existing variants -->
                                    @foreach($product->variants as $index => $variant)
                                    <div class="variant mb-3">
                                        <hr>
                                        <input type="hidden" name="variants[{{ $index }}][id]"
                                            value="{{ $variant->id }}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Variant Name</label>
                                                <input type="text" class="form-control"
                                                    name="variants[{{ $index }}][name]" value="{{ $variant->name }}"
                                                    placeholder="Variant Name" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label class="control-label">Price</label>
                                                <input type="number" class="form-control"
                                                    name="variants[{{ $index }}][price]" value="{{ $variant->price }}"
                                                    placeholder="Price" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Discount Price (optional)</label>
                                                <input type="number" class="form-control"
                                                    name="variants[{{ $index }}][discount_price]"
                                                    value="{{ $variant->discount_price }}" placeholder="Discount Price">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label class="control-label">Variant Images (optional)</label>
                                                <input type="file" class="form-control"
                                                    name="variants[{{ $index }}][images][]" multiple>
                                                @if($variant->images)
                                                <div class="mt-2">
                                                    @foreach($variant->images as $image)
                                                    <img src="{{ asset($image->image_url) }}" alt="Variant Image"
                                                        width="100" class="me-2">
                                                    @endforeach
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <button type="button" id="addVariant" class="btn btn-primary mt-3">Add Variant</button>
                                <!-- Variants Section -->
                            </div>
                            <!-- Form Actions -->
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success rounded-pill px-4 mt-3">Save</button>
                                <a href="{{ route('products.index') }}"
                                    class="btn btn-dark rounded-pill px-4 mt-3">Cancel</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

</x-app-layout>
<script>
    var variantCount = {{ $product-> variants -> count() }}; // Initialize variant count with existing variants

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
    document.getElementById('addVariant').addEventListener('click', function () {
        addVariantFields();
    });
</script>