<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Routing\Route;

class CartController extends Controller
{
    //

    public function add(Request $request){

        $produit = Product::find($request->id);

        Cart::add(
            ['id' => $produit->id,
            'name' => $produit->title,
            'qty' => 2,
            'price' => $produit->price,
            'options' => ['size' => $request->qty,
                          'Color' => ''
            ]]);

        return redirect(route('post.add'));

    }

    public function index(){

        $content = Cart::content();
        dd($content);
    }
}
