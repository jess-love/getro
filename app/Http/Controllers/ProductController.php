<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\sub_category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

//    public function product(Request $request, $sub_category_id = null)
//    {
//        $products = Product::where('sub_category_id', $sub_category_id)->get();
//        $sub_cat = sub_category::all();
//
//        return view('product-list-right', compact('products', 'sub_cat'));
//    }

    public function product( $sub_category_id)
    {
        $products = Product::where('sub_category_id', $sub_category_id)->get();
        $sub_cat = sub_category::all();
        return view('product-list-right', compact('products', 'sub_cat'));
    }


    public function Sub_Categories(){
        $sub_cat = sub_category::all();
        return view('product-list-right', compact('sub_cat'));
    }

    public function ViewAllProduct()
    {
        $products = Product::all();
        return view('product-list-right', compact('products'));

    }
}
