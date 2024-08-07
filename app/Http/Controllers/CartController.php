<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ProductVariant;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        $variant_id = $request->input('variant_id');

        if (Auth::check()) {
            $prod_check = Product::where('id', $product_id)->first();

            if ($prod_check) {
                $cart_item = Cart::where('product_id', $product_id)
                    ->where('user_id', Auth::id())
                    ->where(function ($query) use ($variant_id) {
                        if ($variant_id) {
                            $query->where('variant_id', $variant_id);
                        } else {
                            $query->whereNull('variant_id');
                        }
                    })
                    ->first();

                if ($cart_item) {
                    // If the cart item already exists, update the quantity
                    $cart_item->product_quant += $product_qty;
                    $cart_item->save();
                    return response()->json(['status' => $prod_check->name . ' quantity updated in cart']);
                } else {
                    // If the cart item does not exist, add a new item
                    $cart_item = new Cart();
                    $cart_item->product_id = $product_id;
                    $cart_item->user_id = Auth::id();
                    $cart_item->product_quant = $product_qty;

                    if ($variant_id) {
                        $cart_item->variant_id = $variant_id;
                    } else {
                        $cart_item->variant_id = null;
                    }

                    $cart_item->save();
                    return response()->json(['status' => $prod_check->name . ' added to cart']);
                }
            } else {
                return response()->json(['status' => 'Product not found']);
            }
        } else {
            return response()->json(['status' => 'Login to continue']);
        }
    }

    public function viewCart()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('web.cart', compact('cartItems'));
    }

    public function updateItem(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $prod_qty = $request->input('prod_qty');
        $variant_id = $request->input('variant_id');

        $query = Cart::where('product_id', $prod_id)->where('user_id', Auth::id());

        if ($variant_id) {
            $query->where('variant_id', $variant_id);
        } else {
            $query->whereNull('variant_id');
        }

        if ($query->exists()) {
            $cart = $query->first();
            $cart->product_quant = $prod_qty;
            $cart->update();
            return response()->json(['status' => 'Quantity updated successfully!']);
        }
    }

    public function deleteItem(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $variant_id = $request->input('variant_id');

        $query = Cart::where('product_id', $prod_id)->where('user_id', Auth::id());

        if ($variant_id) {
            $query->where('variant_id', $variant_id);
        } else {
            $query->whereNull('variant_id');
        }

        if ($query->exists()) {
            $cartItem = $query->first();
            $cartItem->delete();
            return response()->json(['status' => 'Item deleted successfully!']);
        }
    }
}
