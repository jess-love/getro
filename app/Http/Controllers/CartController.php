<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

<<<<<<< HEAD
    public function addProductToCart($id){
=======
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
>>>>>>> 8780b187cc0e946068ed7f43c27d5a585ae70ec4

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


<<<<<<< HEAD

    public function shopcart(){

        return view('shop-cart');
=======
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
>>>>>>> 8780b187cc0e946068ed7f43c27d5a585ae70ec4
    }
}
