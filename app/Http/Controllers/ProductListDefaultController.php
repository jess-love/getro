<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductListDefaultController extends Controller
{
    public function index()
    {

       $category = Category::all()->where('slug',1);

        return view('product-list-defualt', compact('category'));
    }
}
