<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Mail\MyMail; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\View;
class CheckoutController extends Controller
{
    public function viewCheckout()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('web.checkout', compact('cartItems'));
    }

    function sendOrderConfirmationEmail($toEmail, $userName, $orderNumber, $shippingAddress, $billingAddress, $paymentMethod, $totalPrice, $orderItems)
    {
        $mail = new PHPMailer(true);
        $MAIL_USERNAME = "furniscape112@gmail.com";
        $MAIL_PASSWORD = "pksj bmoq fldg vwhx";

        try {
            $mail->isSMTP();                                            
            $mail->Host = 'smtp.gmail.com';                       
            $mail->SMTPAuth = true;                                     
            $mail->Username = $MAIL_USERNAME;              
            $mail->Password = $MAIL_PASSWORD;                    
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
            $mail->Port = 587;                                          

            $mail->setFrom($MAIL_USERNAME, 'Furniscape');
            $mail->addAddress($toEmail);                                

            $mail->isHTML(true);                                         
            $mail->Subject = 'Order Confirmation';

            // Load and parse the HTML template
           // dd($orderItems);
            $template = View::make('emails.confirmation', [
                'userName' => $userName,
                'orderNumber' => $orderNumber,
                'shippingAddress' => $shippingAddress,
                'billingAddress' => $billingAddress,
                'paymentMethod' => $paymentMethod,
                'totalPrice' => $totalPrice,
                'orderItems' => $orderItems
            ])->render();

            $mail->Body    = $template;
            $mail->AltBody = strip_tags($template); // Plain text alternative for email clients that do not support HTML

            $mail->send();
          //  Log::info("Email successfully sent to {$toEmail}");
        } catch (Exception $e) {
          //  Log::error("Failed to send email to {$toEmail}. Error: " . $mail->ErrorInfo);
        }
    }

    public function placeOrder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->shipping_address = $request->input('shipping');
        $order->billing_address = $request->input('billing');
        $order->number = Order::generateOrderNumber();
        $order->tracking_no = 'ORD_'.$order->number ;
        $order->payment_method = $request->input('payment_method');
        $order->status = 'pending';
        $order->payment_status = false;

        $total = 0;
        $cartItemsTotal = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItemsTotal as $prod) {
            $price = $prod->variant 
                ? ($prod->variant->discount_price > 0 ? $prod->variant->discount_price : $prod->variant->price)
                : ($prod->products->discount_price > 0 ? $prod->products->discount_price : $prod->products->price);
            $total += $price * $prod->product_quant;
        }
        $order->total_price = $total;
        $order->save();

        $cartItems = Cart::where('user_id', Auth::id())->get();
        foreach($cartItems as $item)
        {
            $price = $item->variant 
                ? ($item->variant->discount_price > 0 ? $item->variant->discount_price : $item->variant->price)
                : ($item->products->discount_price > 0 ? $item->products->discount_price : $item->products->price);
            
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'variant_id' => $item->variant ? $item->variant->id : null,
                'quantity' => $item->product_quant,
                'price' => $price
            ]);
            $orderItems[] = [
                'product_name' => $item->products->name,
                'variant_name' => $item->variant ? $item->variant->name : 'N/A',
                'quantity' => $item->product_quant,
                'price' => $price
            ];
        }
        $user = User::where('id', Auth::id())->first();
        if($user)
        {
            
            $user->first_name = $request->input('fname');
            $user->last_name = $request->input('lname');
            $user->phone_number = $request->input('phone');
            $user->shipping_address = $request->input('shipping');
            $user->billing_address = $request->input('billing');
            $user->city = $request->input('city');
            $user->country = $request->input('country');
            // $user->state = $request->input('state');
            $user->zip_code = $request->input('zip');
            $user->update();
            $toEmail = "sh4mi@hotmail.com";
            //dd($orderItems);
            $this->sendOrderConfirmationEmail(
                $toEmail,
                $user->first_name . ' ' . $user->last_name,
                $order->number,
                $order->shipping_address,
                $order->billing_address,
                $order->payment_method,
                $order->total_price,
                $orderItems
            );
        }
        

        Cart::destroy($cartItems);
        return redirect('/checkout')->with('success', 'Order Placed Successfully');
        // return redirect('/')->with('success', 'Order Placed Successfully');
    }

    // public function placeOrder(Request $request)
    // {
    //     $order = new Order();
    //     $order->user_id = Auth::id();
    //     $order->shipping_address = $request->input('shipping');
    //     $order->billing_address = $request->input('billing');
    //     $order->number = $request->input('phone');
    //     $order->tracking_no = 'ORD_'.rand(1111,9999);
    //     $order->payment_method = $request->input('payment_method');
    //     $order->status = 'pending';
    //     $order->payment_status = false;

    //     $total = 0;
    //     $cartItemsTotal = Cart::where('user_id', Auth::id())->get();
    //     foreach ($cartItemsTotal as $prod) {
    //         $price = $prod->products->discount_price > 0 ? $prod->products->discount_price : $prod->products->price;
    //         $total += $price;
    //     }
    //     $order->total_price = $total;
    //     $order->save();

    //     $cartItems = Cart::where('user_id', Auth::id())->get();
    //     foreach($cartItems as $item)
    //     {
    //         $price = $item->products->discount_price > 0 ? $item->products->discount_price : $item->products->price;
    //         OrderItem::create([
    //             'order_id' => $order->id,
    //             'product_id' => $item->product_id,
    //             'quantity' => $item->product_quant,
    //             'price' => $price
    //         ]);
    //         // $prod = Product::where('id', $item->product_id)->first();
    //         // $prod->quantity = $prod->quantity - $item->product_quant;
    //         // $prod->update();
    //     }

    //     if(Auth::user()->shipping_address == NULL)
    //     {
    //         $user = User::where('id', Auth::id())->first();
    //         $user->first_name = $request->input('fname');
    //         $user->last_name = $request->input('lname');
    //         $user->phone_number = $request->input('phone');
    //         $user->shipping_address = $request->input('shipping');
    //         $user->billing_address = $request->input('billing');
    //         $user->city = $request->input('city');
    //         $user->country = $request->input('country');
    //         $user->state = $request->input('state');
    //         $user->country = $request->input('country');
    //         $user->zip_code = $request->input('zip');
    //         $user->update();
    //     }

    //     Cart::destroy($cartItems);
    //     return redirect('/')->with('status', 'Order Placed Successfully');
    // }
}
