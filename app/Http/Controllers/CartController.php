<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use http\Env\Response;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function AddToCart(Request $request){

        $product = Product::find($request->id);
        if ($product == null){
            return Response()->json([
                'status' => false,
                'message' => 'Product not found'
            ]);
        }
        if (Cart::count() > 0){
            $cartContent = Cart::content();
            $produitAlreadyExist = false;

            foreach ($cartContent as  $item){
                if ($item->id == $product->id){
                    $produitAlreadyExist = true;
                }
            }
            if ($produitAlreadyExist == false){
                Cart::add($product->id, $product->title, 1, $product->unit_price, ['size' => 'large']);

                $status = true;
                $message = $product->title.'added in cart';
            }else{
                $status = false;
                $message = $product->title.'already added in cart';
            }

        }else{
            //cart is empty
            Cart::add($product->id, $product->title, 1, $product->unit_price, ['size' => 'large']);
            $status = true;
            $message = $product->title.'added in cart';
        }
        return Response()->json([
            'status' => $status,
            'message' => $message
        ]);

    }

    public function Cart(){

        dd(Cart::content());


        //return view('shop-cart');
    }


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
        return view('shop-cart');
    }

    public function shopcart(){
        return view('shop-cart');
    }

    public function update(Request $request){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart',$cart);
            session()->flash('success','cart successfully update');
        }
    }
}
