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
                'color' =>"Roude",
                'size' =>"XL",
                'quantity' =>2,
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product add to cart succssfully!');
    }



    public function countItem(){
        $item = Cart::count();

        return view('index',compact('item'));
    }

    public function removeItem(Request $request){
       if($request->id){
           $cart = session()->get('cart');
           if(isset($cart[$request->id])){
               unset($cart[$request->id]);
               session()->put('cart',$cart);
           }
           return redirect()->back()->with('success','Product reccessfully removed!');
           //session()->flash('success','Product reccessfully removed');
       }
     }


    public function clearCart(){
        Cart::destroy();
        return redirect()->route('clear.cart');
    }

    public function shopcart(){
        return view('shop-cart');
    }
}
