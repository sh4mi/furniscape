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
            'is_featured' => 'boolean',
            'is_available' => 'boolean',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
        ]);
        // Create the product
        Product::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

}
