<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addToCart(Request $request){
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if(Auth::check())
        {
            $prod_check = Product::where('id', $product_id)->first();
            if($prod_check)
            {
                if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->name.'Already Added To Cart']);
                }
                else
                {
                    $cart_item = new Cart();
                    $cart_item->product_id = $product_id;
                    $cart_item->user_id = Auth::id();
                    $cart_item->product_quant = $product_qty;                
                    $cart_item->save();
                    return response()->json(['status' => $prod_check->name.'Added To Cart']);
                }
            }
        }
        else
        {
            return response()->json(['status' => 'Login To Continue']);
        }
    }

    public function viewCart()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('web.cart', compact('cartItems'));
    }

    public function updateItem(Request $request){
        $prod_id = $request->input('prod_id');
        $prod_qty = $request->input('prod_qty');
        if(Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->exists())
        {
            $cart = Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->first();
            $cart->product_quant = $prod_qty;
            $cart->update();
            return response()->json(['status' => 'Quantity updated successfully!']);
        }
    }

    public function deleteItem(Request $request)
    {
        $prod_id = $request->input('prod_id');
        if(Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->exists())
        {
            $cartItem = Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->first();
            $cartItem->delete();
            return response()->json(['status' => 'Item deleted successfully!']);
        }
    }
}
