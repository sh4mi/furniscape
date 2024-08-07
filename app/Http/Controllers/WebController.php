<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\Order;
class WebController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        return view('web.home', [
            //'user' => $request->user(),
        ]);
    }
    public function account(Request $request): View
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('web.account', [
            'user' => $request->user(),
            'orders' => $orders
        ]);
    }
    public function login(Request $request): View
    {
        return view('web.login', [
            //'user' => $request->user(),
        ]);
    }
    public function register(Request $request): View
    {
        return view('web.register', [
            //'user' => $request->user(),
        ]);
    }

    public function product(Request $request, $id): View
    {   
        $product = Product::with(['images', 'variants.images'])->findOrFail($id);
        $products = Product::with(['images', 'variants.images'])->inRandomOrder()->limit(10)->get();
        
        return view('web.product', [
            'product' => $product,
            'products'=>$products,
        ]);
    }

    public function shop(Request $request)
    {
        $query = Product::query();

        // Apply filters if query parameters are provided
        if ($request->filled('category')) {
           // $query->where('category', $request->category);
        }

        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        // Paginate results
        $products = $query->paginate(12);

        // Pass data to the view
        return view('web.shop', compact('products')); //mvc
    }

    public function checkout(Request $request): View
    {
        return view('web.checkout', [
            'user' => $request->user(),
        ]);
    }

    public function viewOrder($id)
    {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->get();
        return view('web.orders.view', compact('orders'));
    }

    public function showWishlist()
    {
        return view('web.wishlist');
    }
    
    public function getWishlistProducts(Request $request)
    {
        $wishlistIds = $request->input('wishlist_ids', []);

        $products = Product::whereIn('id', $wishlistIds)->with('images')->get();

        return response()->json($products);
    }
}
