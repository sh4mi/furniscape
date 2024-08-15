<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\ProductVariantImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
class ProductsController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
    public function store(Request $request)
    {
       // dd($request->all());
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer|min:0',
            'sku' => 'nullable|string|max:255',
            'dimensions' => 'nullable|string|max:255',
            'material' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric|min:0',
            'is_featured' => 'nullable|boolean',
            'is_available' => 'nullable|boolean',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate images
        ]);
        // Create the product
        $productData = $request->except(['images', 'variants']);
        $product = Product::create($productData);
        

        $destinationPath = public_path('assets/web/images/product');
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }
        // Handle image upload and save to database
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('assets/web/images/product'), $filename);
                $path = 'assets/web/images/product/' . $filename;

                $productImage = new ProductImage();
                $productImage->product_id = $product->id;
                $productImage->image_url = $path;
                $productImage->save();
            }
        }

        return redirect()->route('products.edit', $product->id)->with('success', 'Product created successfully.');
    }
    public function edit($id)
    {
        // Retrieve the product by ID
        $product = Product::with('images')->findOrFail($id);

        // Retrieve all categories
        $categories = Category::all();

        // Pass the product and categories to the view
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer|min:0',
            'sku' => 'nullable|string|max:255',
            'dimensions' => 'nullable|string|max:255',
            'material' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric|min:0',
            'is_featured' => 'boolean',
            'is_available' => 'boolean',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate images
            'variants.*.name' => 'required|string|max:255',
            'variants.*.price' => 'required|numeric|min:0',
            'variants.*.discount_price' => 'nullable|numeric|min:0',
            'variants.*.images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate variant images
        ]);

        // Find the product by ID
        $product = Product::findOrFail($id);

        // Update the product with the validated data (excluding 'images' and 'variants')
        $product->update($request->except('images', 'variants'));

        // Handle image upload and save to database
        $destinationPath = public_path('assets/web/images/product');
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                $path = 'assets/web/images/product/' . $filename;

                // Create new product image
                $productImage = new ProductImage();
                $productImage->product_id = $product->id;
                $productImage->image_url = $path;
                $productImage->save();
            }
        }

        // Handle product variants
        if ($request->has('variants')) {
            $existingVariantIds = $product->variants->pluck('id')->toArray();
            $requestVariantIds = collect($request->input('variants', []))->pluck('id')->filter()->toArray();
            // Update existing variants or create new ones
            foreach ($request->variants as $variantData) {
                if (isset($variantData['id']) && in_array($variantData['id'], $existingVariantIds)) {
                    $variant = ProductVariant::find($variantData['id']);
                    if ($variant) {
                        $variant->update($variantData);
                        if (isset($variantData['images']) && !empty($variantData['images'])) {
                            // Delete existing images if new images are uploaded
                            $variant->images()->delete();

                            $destinationPath = public_path('assets/web/images/variant');
                            if (!File::exists($destinationPath)) {
                                File::makeDirectory($destinationPath, 0755, true);
                            }

                            foreach ($variantData['images'] as $variantImage) {
                                $filename = time() . '_' . $variantImage->getClientOriginalName();
                                $variantImage->move($destinationPath, $filename);
                                $path = 'assets/web/images/variant/' . $filename;

                                $productVariantImage = new ProductVariantImage();
                                $productVariantImage->product_variant_id = $variant->id;
                                $productVariantImage->image_url = $path;
                                $productVariantImage->save();
                            }
                        }
                    }
                } else {
                    // Create new variant
                   // dd($variantData);
                    $variantDataNew = Arr::except($variantData, ['images']);
                    $variant = new ProductVariant($variantDataNew);
                    $variant->product_id = $product->id;
                    $variant->save();

                    // Handle variant images if provided
                    if (isset($variantData['images'])) {
                        $destinationPath = public_path('assets/web/images/variant');
                        if (!File::exists($destinationPath)) {
                            File::makeDirectory($destinationPath, 0755, true);
                        }

                        foreach ($variantData['images'] as $variantImage) {
                            $filename = time() . '_' . $variantImage->getClientOriginalName();
                            $variantImage->move($destinationPath, $filename);
                            $path = 'assets/web/images/variant/' . $filename;

                            $productVariantImage = new ProductVariantImage();
                            $productVariantImage->product_variant_id = $variant->id;
                            $productVariantImage->image_url = $path;
                            $productVariantImage->save();
                        }
                    }
                }
            }
            // Ensure that existing variants not included in the request are preserved
        $variantsToKeep = array_diff($existingVariantIds, $requestVariantIds);
        ProductVariant::whereIn('id', $variantsToKeep)
            ->get()
            ->each(function ($variant) {
                $variant->load('images'); // Load existing images if needed
            });
        }

        

        // Redirect to the index page with a success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    // public function update(Request $request, $id)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'category_id' => 'required|exists:categories,id',
    //         'quantity' => 'required|integer|min:0',
    //         'sku' => 'nullable|string|max:255',
    //         'dimensions' => 'nullable|string|max:255',
    //         'material' => 'nullable|string|max:255',
    //         'weight' => 'nullable|numeric|min:0',
    //         'is_featured' => 'boolean',
    //         'is_available' => 'boolean',
    //         'price' => 'required|numeric|min:0',
    //         'discount_price' => 'nullable|numeric|min:0',
    //     ]);

    //     // Find the product by ID
    //     $product = Product::findOrFail($id);

    //     // Update the product with the validated data
    //     $product->update($request->except('images')); // Exclude 'images' field from the update

    //     // Handle image upload and save to database
    //     $destinationPath = public_path('assets/web/images/product');
    //     if (!File::exists($destinationPath)) {
    //         File::makeDirectory($destinationPath, 0755, true);
    //     }
    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $image) {
    //             $filename = time() . '_' . $image->getClientOriginalName();
    //             $image->move($destinationPath, $filename);
    //             // $path = $image->store('product_images');
    //             $path = 'assets/web/images/product/' . $filename;
    //             $productImage = new ProductImage(); // Instantiate the ProductImage model
    //             $productImage->product_id = $product->id; // Assuming product_id is the foreign key linking product and product images
    //             $productImage->image_url = $path;
    //             $productImage->save();
    //         }
    //     }
    //     // dd($request->all());
    //     // Redirect to the index page with a success message
    //     return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    // }
    public function destroy(Product $product)
    {
        if ($product) {
            if ($product->orderItems()->count() > 0) {
                $product->orderItems()->delete();
            }

            $product->delete();
    
            return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
        }
    
        return redirect()->route('products.index')->with('error', 'Product not found.');
    }
}
