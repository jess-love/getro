<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request)
    {
        $user = auth()->user();

        $wishlistItem = Wishlist::firstOrNew([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
        ]);
        $wishlistItem->save();

        return response()->json(['message' => 'Produit ajouté à la wishlist avec succès']);
    }

    public function toggleWishlist(Request $request)
    {
        $user = auth()->user();
        $productId = $request->product_id;

        $wishlistItem = Wishlist::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return response()->json(['message' => 'Produit retiré de la wishlist avec succès']);
        } else {
            $wishlistItem = new Wishlist([
                'user_id' => $user->id,
                'product_id' => $productId,
            ]);
            $wishlistItem->save();

            return response()->json(['message' => 'Produit ajouté à la wishlist avec succès']);
        }
    }


    public function showWishlist()
    {
        $user = auth()->user();

        $wishlistItems = Wishlist::where('user_id', $user->id)->with('product.product_images')->get();
        return view('wishlist', compact('wishlistItems'));
    }

    public function removeFromWishlist($id)
    {
        $user = auth()->user();

        $wishlistItem = Wishlist::where('user_id', $user->id)->where('id', $id)->first();
        if ($wishlistItem) {
            $wishlistItem->delete();
            return redirect()->back()->with('success', 'Produit retiré de la wishlist avec succès');
        } else {
            return redirect()->back()->with('error', 'Produit introuvable dans la wishlist');
        }
    }

}
