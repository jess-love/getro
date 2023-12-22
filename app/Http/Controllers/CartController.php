<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\product_images;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{

    public function AddToCart(Request $request)
    {
        try {
            $request->validate([
                'product_id' => 'required',
                'product_qty' => 'numeric|min:1',
            ]);

            $product_id = $request->input('product_id');
            $product_qty = $request->input('product_qty', 1);

            if ($product_qty <= 0) {
                return response()->json(['error' => 'Invalid quantity'], 400);
            }

            if (Auth::check()) {
                $prod_check = Product::where('id', $product_id)->first();

                if ($prod_check) {
                    // Vérifier si le produit est déjà dans le panier de l'utilisateur
                    if ($this->isProductInUserCart($product_id, Auth::id())) {
                        return response()->json(['status' => $prod_check->title . " Already added To Cart"]);
                    } else {
                        // Ajouter le produit au panier de l'utilisateur
                        $this->addToUserCart($product_id, Auth::id(), $product_qty);

                        return response()->json(['status' => $prod_check->title . " added To Cart"]);
                    }
                }
            }

            // Si le code atteint cette ligne, cela signifie que le bloc Auth::check() a échoué.
            Log::error('Authentication check failed.');

            return response()->json(['error' => 'Authentication check failed'], 500);
        } catch (\Exception $e) {
            // Capture et enregistrez l'exception
            Log::error('Exception: ' . $e->getMessage());

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

//    public function ViewCart(){
//        $cartContent = Cart::all()->where('user_id', Auth::id());
//        return view('shop-cart',compact('cartContent'));
//    }

    public function isProductInUserCart($product_id, $user_id)
    {
        // Logique pour vérifier si le produit est déjà dans le panier de l'utilisateur
        return Cart::where('product_id', $product_id)->where('user_id', $user_id)->exists();
    }

    private function addToUserCart($product_id, $user_id, $product_qty)
    {
        // Logique pour ajouter le produit au panier de l'utilisateur
        $cartItem = new Cart();
        $cartItem->product_id = $product_id;
        $cartItem->user_id = $user_id;
        $cartItem->quantity = $product_qty;
        $cartItem->save();

    }


    public function ViewCart() {
        $user = Auth::user();
        $productsWithImages = Product::with(['product_images', 'cart'])->whereHas('cart', function($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();
        $products = Product::with('product_images')
            ->where('slog', 'New Arrival')
            ->where('status', 1)
            ->take(4)
            ->get();
//        dd($products);
        return view('shop-cart', compact('productsWithImages', 'user', 'products'));
    }



    public function updateCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'product_qty' => 'required|numeric|min:1',
        ]);

        $prod_id = $request->input('product_id');
        $qty = $request->input('product_qty');


        try {
            if ($qty <= 0) {
                return response()->json(['error' => 'Invalid quantity'], 400);
            }

            if (Auth::check()) {
                if (Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                    $cart = Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->first();
                    $cart->quantity = $qty;
                    $cart->save();

                    return response()->json(['status' => "quantity updated successfully"]);
                }
            }
        } catch (\Exception $e) {
            return response()->json(['status' => "error updating quantity"]);

        }
    }




    public function deleteItem(Request $request){
        if(Auth::check()){
            $prod_id = $request->input('prod_id');
            if(Cart::where('product_id',$prod_id)->where('user_id',Auth::id())->exists()){
                $cartItem = Cart::where('product_id',$prod_id)->where('user_id',Auth::id())->first();
                if ($cartItem) {
                    $cartItem->delete();
                    return response()->json(['status' => "Product Deleted successfully"]);
                } else {
                    return response()->json(['status' => "Product not found"]);
                }
            }

        }else{
            return response()->json(['status',"login to continue"]);
        }
    }

    public function emptyCart(Request $request){
        if(Auth::check()){
            // Supprimez tous les éléments du panier pour l'utilisateur authentifié
            Cart::where('user_id', Auth::id())->delete();
            return response()->json(['status' => "Cart Emptied successfully"]);
        } else {
            return response()->json(['status',"Login to continue"]);
        }
    }



    public function ProductInCart(){
        $products = Product::with('product_images')
            ->where('slog', 'New Arrival')
            ->where('status', 1)
            ->take(4)
            ->get();
//        dd($products);
        return view('shop-cart',compact('products'));
    }

}
