<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ViewCategoryController extends Controller
{


    public function viewcategory(){

        $categories = Category::all();

        return view('products-category',compact('categories'));
    }
}
