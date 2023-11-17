<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Routing\Route;

class CartController extends Controller
{
    //

    public function add(){

        Cart::add(['id' => '293',
            'name' => 'Product 1',
            'qty' => 2,
            'price' => 9.99,
            'options' => ['size' => 'large']]);

        return redirect(route('post.add'));

    }

    public function index(){

        $content = Cart::content();
        dd($content);
    }
}
