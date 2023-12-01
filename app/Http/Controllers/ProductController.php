<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\sub_category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product($sub_category_id, Request $request)
    {
        $sortType = $request->input('sortType', '');
        $products = Product::where('sub_category_id', $sub_category_id);

        if ($sortType == 'low_to_high') {
            $products->orderBy('unit_price', 'asc');
        } elseif ($sortType == 'high_to_low') {
            $products->orderBy('unit_price', 'desc');
        }

        $products = $products->paginate(16);
        $sub_cat = sub_category::all();

        return view('product-list-right', compact('products', 'sub_cat'),  ['sub_category_id' => $sub_category_id]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $sub_cat = sub_category::all();

        $products = Product::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->paginate(16);

        return view('product-list-right', compact('products', 'query', 'sub_cat'));
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
