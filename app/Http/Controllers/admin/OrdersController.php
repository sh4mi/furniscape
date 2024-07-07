<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Order;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        return view('admin.orders.index', [
            //'user' => $request->user(),
        ]);
    }

    public function viewOrder($id)
    {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->get();
        return view('orders.view', compact('orders'));
    }
}
