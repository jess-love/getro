<?php

namespace App\Http\Controllers;

use App\Models\buy;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    protected $orderTotal;

   public function session(Request $request)
   {
       \Stripe\Stripe::setApiKey(config('stripe.sk'));

       $productname = $request->get('productname');
       $totalprice = $request->get('total');
       $two0 = "00";
       $total = "$totalprice$two0";
       $unitAmountInCents = round($total * 100);

       $session = \Stripe\Checkout\Session::create([
           'line_items'  => [
               [
                   'price_data' => [
                       'currency'     => 'HTG',
                       'product_data' => [
                               'name' => $productname,
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
        $str=rand();
        $order_key = sha1($str);
        $user = Auth::user();

        // if ($this->orderTotal !== null) {
            $order = new Order([
                'user_id' => $user->id,
                'total'   => 56,
                'order_id_generate' => Str::random(10)
            ]);
            $order->save();

            $cart = Session::get('cart', []);

            foreach ($cart as $cartItem) {
                $buy = new Buy([
                    'product_id' => $cartItem['product_id'],
                    'quantity'   => $cartItem['quantity'],
                    'order_id'   =>  $order->id,
                ]);
                $order->buys()->save($buy);
            }

            Session::forget('cart');

            return redirect()->route('confirmation', ['order_key' => 1315558583560683113]);
        // } else {
        //     return back()->with('error', 'Une erreur s\'est produite lors du traitement de la commande.');
        // }
    }


    public function returnToProductPage()
    {
        return view('index');
    }
}
