<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\sub_category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product_list_right($sub_category_id, Request $request)
    {
        $sortType = $request->input('sortType', '');
        $products = Product::with('product_images')
            ->where('status',1)
            ->where('sub_category_id', $sub_category_id);

        if ($sortType == 'low_to_high') {
            $products->orderBy('unit_price', 'asc');
        } elseif ($sortType == 'high_to_low') {
            $products->orderBy('unit_price', 'desc');
        }

        $products = $products->paginate(16);
        $sub_category = sub_category::find($sub_category_id);
        $sub_cat = sub_category::all();

        return view('product-list-right', ['sub_category_id' => $sub_category_id, 'products' => $products, 'sub_category'=>$sub_category ,'sub_cat' => $sub_cat]);
    }

    public function product_list_left( Request $request)
    {
        $sortType = $request->input('sortType', '');
        $products = Product::with('product_images')
            ->where('status',1);

        if ($sortType == 'low_to_high') {
            $products->orderBy('unit_price', 'asc');
        } elseif ($sortType == 'high_to_low') {
            $products->orderBy('unit_price', 'desc');
        }

        $products = $products->paginate(32);
        $sub_cat = sub_category::all();

        return view('product-list-left', ['products' => $products, 'sub_cat' => $sub_cat]);
    }


    public function Sub_Categories_Product_list_Right(){
        $sub_cat = sub_category::all();
        return view('product-list-right', compact('sub_cat'));
    }


    public function productSpecificProduct( Request $request)
    {
        $sortType = $request->input('sortType', '');
        $products = Product::with('product_images')
            ->where('status',1);

        if ($sortType == 'low_to_high') {
            $products->orderBy('unit_price', 'asc');
        } elseif ($sortType == 'high_to_low') {
            $products->orderBy('unit_price', 'desc');
        }

        $products = $products->paginate(16);
        $sub_cat = sub_category::all();

        $product_watch = Product::where('title', 'like', '%watch%')
                                  ->where('status',1)
                                  ->get();
        return view('product-list', ['product_watch'=> $product_watch,  'products' => $products,'sub_cat' => $sub_cat]);
    }


    public function search($sub_category_id, Request $request)
    {
        $query = $request->input('query');
        $sub_cat = sub_category::all();

        $products = Product::where('title', 'like', '%' . $query . '%')
            ->where('sub_category_id', $sub_category_id)
            ->orWhere('description', 'like', '%' . $query . '%')
            ->paginate(16);

        return view('product-list-right', compact('products', 'query', 'sub_cat', 'sub_category_id'));
    }

    public function Search_list_left(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->paginate(16);

        return view('product-list-left',compact('products', 'query'));


    }
}
