<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public  function ViewProduitDetail(Request $request){

        //$products = Product::all()->find($request->id);

        return view('Product-details',['products' =>Product::all()->find($request->id)]);
    }
}