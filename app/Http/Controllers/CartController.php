<?php

namespace App\Http\Controllers;

use App\Models\Cart as Cart;
use App\Models\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    
    
    
    
    
    public function shopcart(){
        $cartContent = Cart::content();
        $data['cartContent'] = $cartContent;
        return view('shop-cart', $data);
    }



    public function updateCart(Request $request){

        $rowId = $request->rowId;
        $qty = $request->qty;
        $color = "Rouge";

        $itemInfo = Cart::get($rowId);

        $product = Product::find($itemInfo->id);

        if($product->track_qty == 'Yes'){
            if($qty <= $product->qty){
                Cart::update($rowId,$qty);
                $message = 'Cart updated successfully';
                $status = true;
                session()->flash('success',$message);
            }else{
                $message = 'Request qty('.$qty.') not available in stock.';
                $status = false;
                session()->flash('error',$message);
            }
        }else{
            Cart::update($rowId,$qty);
            $message = 'Cart updated successfully';
            $status = true;
            session()->flash('success',$message);
        }
        return response()->json([
            'status' => $status,
            'message' => $message
        ]);
    }


    public function deleteItem(Request $request){
        $rowId = $request->rowId;
        $itemInfo = Cart::get($rowId);
        if($itemInfo == null){
            $errorMessage = 'Item not found in Cart';
            session()->flash('error',$errorMessage);
            return response()->json([
                'status' => false,
                'message' => $errorMessage
            ]);

        }

        Cart::remove($request->rowId);
        $message = 'Item remove successfully';
        session()->flash('success',$message);
        return response()->json([
            'status' => true,
            'message' => $message
        ]);
    }

}
