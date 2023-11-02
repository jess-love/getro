<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function add(){
    //     Cart::add(['id' => '293ad', 
    //     'name' => 'Product 1', 
    //     'qty' => 1, 
    //     'price' => 9.99, 
    //     'options' => ['size' => 'large']]
    // );

    return view('index');

}


    public function panier(){

        //$panier = Cart::content();

        //dd($panier);
    }
}
