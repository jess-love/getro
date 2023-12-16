<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use App\Models\Product;
use App\Models\sub_category;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HeaderComposer
{
    public function compose(View $view){

        $catAndSub = sub_category::with('CategoryFunc')->get()->groupBy('category_id');
        $categories = Category::all();
        $user = Auth::user();
        $productsWithImages = Product::with(['product_images', 'cart'])->whereHas('cart', function($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        $view->with('cat_and_sub', $catAndSub)->with('categories', $categories)->with('productsWithImages', $productsWithImages);


    }


}
