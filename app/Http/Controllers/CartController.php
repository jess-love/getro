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

        $product = Product::with('product_images')->find($request->id);
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
                Cart::add($product->id, $product->title, $product->qty, $product->unit_price, ['productImage' => (!empty($product->product_images)) ? $product->product_images->first() : '']);

                $status = true;
                $message = $product->title.'added in cart';
            }else{
                $status = false;
                $message = $product->title.'already added in cart';
            }

        }else{
            //cart is empty
            Cart::add($product->id, $product->title, $product->qty, $product->unit_price, ['productImage' => (!empty($product->product_images)) ? $product->product_images->first() : '']);
            $status = true;
            $message = $product->title.'added in cart';
        }
        return Response()->json([
            'status' => $status,
            'message' => $message
        ]);

    }

    public function shopcart(){
        $cartContent = Cart::content();
        //dd($cartContent);
        $data['cartContent'] = $cartContent;
        return view('shop-cart', $data);
    }



    public function updateCart(Request $request){

        $rowId = $request->rowId;
        $qty = $request->qty;

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
//    public function addProductToCart($id){
//
//        $product = Product::findOrFail($id);
//        $cart = session()->get('cart',[]);
//        if(isset($cart[$id])){
//            $cart[$id]['quantity']++;
//        }else{
//            $cart[$id] = [
//                'title' =>$product->title,
//                'price' =>$product->unit_price,
//                'image' =>$product->main_pic,
//                'color' =>"Roude",
//                'size' =>"XL",
//                'quantity' =>2,
//            ];
//        }
//        session()->put('cart',$cart);
//        return redirect()->back()->with('success','Product add to cart succssfully!');
//    }


//
//    public function countItem(){
//        $item = Cart::count();
//
//        return view('index',compact('item'));
//    }
//
//    public function removeItem(Request $request){
//       if($request->id){
//           $cart = session()->get('cart');
//           if(isset($cart[$request->id])){
//               unset($cart[$request->id]);
//               session()->put('cart',$cart);
//           }
//           return redirect()->back()->with('success','Product reccessfully removed!');
//           //session()->flash('success','Product reccessfully removed');
//       }
//     }
//
//
//    public function clearCart(){
//        Cart::destroy();
//        return view('shop-cart');
//    }
//
//
//    public function update(Request $request){
//        if($request->id && $request->quantity){
//            $cart = session()->get('cart');
//            $cart[$request->id]["quantity"] = $request->quantity;
//            session()->put('cart',$cart);
//            session()->flash('success','cart successfully update');
//        }
//    }
}
