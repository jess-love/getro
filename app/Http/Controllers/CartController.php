<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //

    public function index(){

        $cartItems = Cart::instance('cart')->content();

        return view('shop- cart',compact('cartItems'));
    }
}
