<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Product;
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
        return view('web.account', [
            'user' => $request->user(),
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
        return view('web.shop', compact('products'));
    }


}
