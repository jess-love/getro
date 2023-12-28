<?php

namespace App\Http\Controllers;

use App\Models\buy;
use App\Models\Cart;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PaymentController extends Controller
{

   public function session(Request $request)
   {
       \Stripe\Stripe::setApiKey(config('stripe.sk'));

       $product_name = $request->get('productname');
       $total_price = $request->get('total');
       $two0 = "00";
       $total = "$total_price$two0";
       $unitAmountInCents = round($total * 100);
       session(['total_price' => $total_price]);

       $session = \Stripe\Checkout\Session::create([
           'line_items'  => [
               [
                   'price_data' => [
                       'currency'     => 'HTG',
                       'product_data' => [
                               'name' => $product_name,
                       ],
                   'unit_amount' => $unitAmountInCents,
                   ],
                   'quantity'   => 1,
               ],

           ],
           'mode'        => 'payment',
           'success_url' => route('success'),
           'cancel_url'  => route('checkout'),
       ]);

       return redirect()->away($session->url);
   }

    public function success(Request $request)
    {
        $total_price = session('total_price');
        $user = Auth::user();
        do {
            $str = Str::random(20);
            $order_key = sha1($str);
            $existingOrder = Order::where('order_id_generate', $order_key)->first();

        } while ($existingOrder);
        session(['order_key' => $order_key]);

        $order = new Order([
            'user_id'           => $user->id,
            'total'             => $total_price,
            'order_id_generate' => $order_key,
        ]);
        $order->save();
        $orderID = $order->id;
        $cartItems = Cart::where('user_id', $user->id)->get();
        $qty = 0;

        //Add cart items to buy table and delete cart table
        if (!$cartItems->isEmpty()) {
            foreach ($cartItems as $cartItem) {
                $buy = new buy([
                    'product_id' => $cartItem->product_id,
                    'quantity'   => $cartItem->quantity,
                    'order_id'   => $orderID,
                ]);
                $buy->save();
                $qty += $cartItem->quantity;
            }
        session(['qty' => $qty]);

        Cart::where('user_id', $user->id)->delete();

        } else {
            echo "Le panier est vide ou non défini.";
        }

        //Add data in track and invoice table
        $str = Str::random(10);
        $tracking_number = sha1($str);
        $Track = new Track([
            'order_id'        => $orderID,
            'status'          =>'Livré',
            'tracking_number' =>$tracking_number,
        ]);
        $Track->save();

        $total_product = session('qty');
        $invoice = new Invoice([
            'order_id'      => $orderID,
            'total_product' =>$total_product,
            'total_price'   =>$total_price,
            'tca'           =>2,
        ]);
        $invoice->save();

        return redirect()->route('confirmation');
    }


    public function returnToProductPage()
    {
        return view('index');
    }
}
