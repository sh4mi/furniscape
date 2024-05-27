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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        //dd($request->all());
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
        ]);
        // Create the product
        Product::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    public function edit($id)
    {
        $product = Product::with('images')->findOrFail($id);
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
    ]);

    // Find the product by ID
    $product = Product::findOrFail($id);
    

    // Update the product with the validated data
    $product->update($request->except('images')); // Exclude 'images' field from the update

    // Handle image upload and save to database
    $destinationPath = public_path('assets/web/images/product');
    if (!File::exists($destinationPath)) {
        File::makeDirectory($destinationPath, 0755, true);
    }
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $filename = time().'_'.$image->getClientOriginalName();
            $image->move($destinationPath, $filename);
            // $path = $image->store('product_images');
            $path = 'assets/web/images/product/'.$filename;
            $productImage = new ProductImage(); // Instantiate the ProductImage model
            $productImage->product_id = $product->id; // Assuming product_id is the foreign key linking product and product images
            $productImage->image_url = $path;
            $productImage->save();
        }
    }
    // dd($request->all());
    // Redirect to the index page with a success message
    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}
       public function destroy(Product $product)
        {
            $product->delete();

            return response()->json(['message' => 'product deleted successfully']);
        }





}
