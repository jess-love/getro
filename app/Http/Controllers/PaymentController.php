<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{
   public function payment( Request $request){
       $provider = new PayPalClient;
       $provider->setApiCredentials(config('paypal'));
       $paypalToken = $provider->getAccessToken();

       $respons = $order = $provider->createOrder([
           [
               "intent"=> "CAPTURE",
               "application_context"=>[
                   "return_url"=> route('paypal_success'),
                   "cancel_url"=> route('paypal_cancel')
               ],
               "purchase_units"=>[
                   "amount"=>[
                       "currency_code"=> "USD",
                       "value"=> $request->price
                   ]
              ]
          ]
       ]);
       dd($respons);

   }



   public function session(Request $request)
   {
       \Stripe\Stripe::setApiKey(config('stripe.sk'));

       $productname = $request->get('productname');
       $totalprice = $request->get('total');
       $two0 = "00";
       $total = "$totalprice$two0";

       $session = \Stripe\Checkout\Session::create([
           'line_items'  => [
               [
                   'price_data' => [
                       'currency'     => 'USD',
                       'product_data' => [
                           "name" => $productname,
                       ],
                       'unit_amount'  => $total,
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

    public function success()
    {
        //$id = Auth::id();
        return view('confirmation');

    }

    public function returnToProductPage()
    {
        return view('product-grid-sidebar-banner');
    }
}
