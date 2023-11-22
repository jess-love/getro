<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function addProductToCart($id){

        $product = Product::findOrFail($id);
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                'title' =>$product->title,
                'price' =>$product->unit_price,
                'image' =>$product->main_pic,
                'quantity' =>1,
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product add to cart succssfully!');
    }



    public function shopcart(){

        return view('shop-cart');
    }
}
