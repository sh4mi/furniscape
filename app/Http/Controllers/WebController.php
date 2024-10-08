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
use App\Models\Rating;
use App\Models\Category;
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
        $product = Product::with(['images', 'variants.images', 'ratings.user'])->findOrFail($id);
        $products = Product::with(['images', 'variants.images', 'ratings.user'])->inRandomOrder()->limit(10)->get();
        $ratings = Rating::where('product_id', $id)->get();
        return view('web.product', [
            'product' => $product,
            'products'=>$products,
            'ratings' => $ratings,
        ]);
    }

    public function shop(Request $request)
    {
        $query = Product::query();
    
        // Apply filters if query parameters are provided
        if ($request->filled('category')) {
            $cat = Category::where('slug', $request->category)->first();
            if ($cat) {
                $query->where('category_id', $cat->id);
            }
        }
    
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
    
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }
    
        // Handle sorting
        if ($request->filled('sort_by')) {
            switch ($request->sort_by) {
                case '1': // Hi Low
                    $query->orderBy('price', 'desc');
                    break;
                case '2': // Low Hi
                    $query->orderBy('price', 'asc');
                    break;
                case '3': // Name
                    $query->orderBy('name', 'asc');
                    break;
                default:
                    // Optional: Default sorting if needed
                    break;
            }
        }
    
        // Paginate results
        $products = $query->paginate(12);
    
        // Pass data to the view
        return view('web.shop', compact('products'));
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

    public function searchProduct(Request $request){
        $searched_product = $request->product_name;
        if($searched_product != null){
            $product = Product::where("name", "LIKE", "%$searched_product%")->first();
            if($product){
                return redirect('/product/'.$product->id);
            }
            else
            {
                return redirect->back();
            }
        }
        else{
            return redirect->back()->with('message', 'Searched product not found!');
        }
    }
}
