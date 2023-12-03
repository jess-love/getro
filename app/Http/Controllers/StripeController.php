<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function session(Request $request){
        //$user = auth()->user();
        $product_Items = [];
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        foreach (session('cart') as $id=>$details){
            $product_name = $details['title'];
            $total = $details['price'];
            $quantity = 1;
                //$details['quantity '];

            $two0 = "00";
            $unit_amount = "$total$two0";
            $product_Items[] = [
                'price_data' =>[
                    'product_data'=>[
                        'title'=>$product_name,
                    ],
                    'currency' => 'USD',
                    'unit_amount' => $unit_amount,
                ],
                'quantity' =>$quantity,
            ];
        }
        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'  => [$product_Items],
            'mode'        => 'payment',
            'allow_promotion_codes' => true,
            'metadata' => [
                'user_id'=> "0001"
            ],
            'customer_email'=>"admin@themesbrand.com",//$user->email,
            'success_url' => route('success'),
            'cancel_url' =>route('cancel'),

        ]);
        return redirect()->away($checkoutSession->url);
    }

    public function success(){
        return "Thanks for your order you have just completed your payment. The seeler will reach out you as soon as possible";
    }

    public function cancel(){
        return "cancel";
    }
}
