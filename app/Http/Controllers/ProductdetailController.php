<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public  function ViewProduitDetail(Request $request){
        $products = Product::with('product_images')
                            ->where('status',1)
                            ->get()
                            ->find($request->id);
        return view('Product-details',compact('products'));
    }
}
