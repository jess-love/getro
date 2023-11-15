<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function addProductToCart($id){
    $produit = Product::query()->findOrFail($id);
    $cart = session()->get('cart',[]);

    if(isset($cart[$id])){
        $cart[$id]['quantite']++;
    }else{
        $cart[$id] = [
            "title" =>$produit->title,
            "quantite" =>1,
            "Prix" => $produit->unit_price,
            "image" => $produit->main_pic
        ];
    }
    session()->put('cart',$cart);

    return redirect()->back()->with('success','produit a ete bien ajoute au panier');

}


    public function panier(){

        //$panier = Cart::content();

        //dd($panier);
    }
}
