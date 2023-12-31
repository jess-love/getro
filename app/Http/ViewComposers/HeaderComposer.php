<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use App\Models\Product;
use App\Models\sub_category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HeaderComposer
{
    public function compose(View $view)
    {
        $catAndSub = sub_category::with('CategoryFunc')->get()->groupBy('category_id');
        $categories = Category::all();
        $productsWithImages = [];
        $wishlistItems = [];
        $products_slog = Product::where('status', 1)->pluck('slog')->take(5)->toArray();
        $produits = Product::with('product_images')->where('status',1)->get()->take(12);

        if (Auth::check()) {
            $user = Auth::user();

            $wishlistItems = Wishlist::where('user_id', $user->id)->with('product.product_images')->get();

            $productsWithImages = Product::with(['product_images', 'cart'])->whereHas('cart', function($query) use ($user) {
                $query->where('user_id', $user->id);
            })->get();
        }

        $view->with('cat_and_sub', $catAndSub)
            ->with('categories', $categories)
            ->with('productsWithImages', $productsWithImages)
            ->with('wishlistItems', $wishlistItems)
            ->with('produits', $produits)
            ->with('products_slog', $products_slog);
    }



}
