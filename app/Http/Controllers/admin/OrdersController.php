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
        $user = Auth::user();
        if ($user->role === 'admin') {
            $orders = Order::all();
        } else {
            abort(403, 'Unauthorized access.');
        }

        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id)
    {
        // Retrieve the product by ID
        $order = Order::with('orderItems')->findOrFail($id);

        // Pass the product and categories to the view
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        // Validate and update the order
        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(['message' => 'Order deleted successfully']);
    }

    public function trackOrder()
    {
        return view('web.track-order');
    }

    public function searchOrder(Request $request)
    {
        $request->validate([
            'tracking_number' => 'required|string',
        ]);

        $trackingNumber = $request->input('tracking_number');
        $order = Order::where('tracking_no', $trackingNumber)
                      ->with('orderItems.products', 'orderItems.variant') // eager load related data
                      ->first();

        if (!$order) {
            return redirect()->route('track.order')->with('error', 'Order not found.');
        }

        return view('web.track-order', ['order' => $order]);
    }

}
