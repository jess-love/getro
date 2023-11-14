<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function add($id){
    $produit = Product::findorFail($id);
    $cart = session()->get('cart',[]);

    if(isset($cart[$id])){
        $cart[$id]['quatite']++;
    }else{
        $cart[$id] = [
            "title" =>$produit->title,
            "quantite" =>1,
            "Prix" => $produit->unit_price,
            "image" => $produit->main_pic
        ];
    }
    return view('index');

}


    public function panier(){

        //$panier = Cart::content();

        //dd($panier);
    }
}
