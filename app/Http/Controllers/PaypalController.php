<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
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
}
