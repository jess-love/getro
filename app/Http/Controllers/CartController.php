<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //

    public function add(){
        Cart ::add([
            ['id' => '293ad', 
            'name' => 'Product 1', 
            'qty' => 1, 
            'price' => 10.00],
            ['id' => '4832k', 'name' => 'Product 2', 'qty' => 1, 'price' => 10.00, 'options' => ['size' => 'large']]
          ]);

          return redirect(Route('shop_cart'));

    }


    public function panier(){
        $panier = Cart::content();

        dd($panier);
    }
}
