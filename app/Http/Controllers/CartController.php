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
            'qty' => $request->qty,
            'price' => $produit->unit_price,
            'options' => ['size' => $request->sizes7,
                          'Color' => $request->color,
                          'image' => $produit->main_pic
            ]]);

        return redirect(route('cart_index'));

    }

    public function index(){

        $content = Cart::content();
        //dd($content);
        return view('shop-cart', compact('content'));
    }


    public function countItem(){
        $item = Cart::count();

        return view('index',compact('item'));
    }

    public function removeItem(Request $request){
        $itemremove = Cart::remove($request->id);
        return redirect()->route('remove.item');
    }

    public function clearCart(){
        Cart::destroy();
        return redirect()->route('clear.cart');
    }
}
