<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\alert;

class CartController extends Controller
{
    //

    public function AddToCart(Request $request){

        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if(Auth::check()){
            $prod_check = Product::where('id', $product_id)->first();

            if($prod_check){
                if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){

                    return response()->json(['status' =>$prod_check->title."  Already added To Cart"]);

                }else{
                    $cartItem = new Cart();
                    $cartItem->product_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->quantity = $product_qty;
                    $cartItem->save();
                    return response()->json(['status' =>$prod_check->title." added To Cart"]);

                }

            }
        }


    }

    public function ViewCart(){
        $cartContent = Cart::all()->where('user_id', Auth::id());
        return view('shop-cart',compact('cartContent'));
    }




    public function updateCart(Request $request){

        $prod_id = $request->input('product_id');
        $qty = $request->input('product_qty');

        if(Auth::check()){
            if(Cart::where('product_id',$prod_id)->where('user_id',Auth::id())->exists()){
                $cart = Cart::where('product_id',$prod_id)->where('user_id',Auth::id())->first();
                $cart->quantity = $qty;
                $cart->update();

                return response()->json(['status'=> "quantity updated successfully"]);
            }

            }
    }



    public function deleteItem(Request $request){
        if(Auth::check()){
            $prod_id = $request->input('prod_id');
            if(Cart::where('product_id',$prod_id)->where('user_id',Auth::id())->exists()){
                $cartItem = Cart::where('product_id',$prod_id)->where('user_id',Auth::id())->first();
                $cartItem->delete();

                return response()->json(['status'=> "Product Deleted successfully"]);
            }

        }else{
            return response()->json(['status',"login to continue"]);
        }
    }

}
