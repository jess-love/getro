<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\sub_category;
use Illuminate\Http\Request;

class ViewCategoryController extends Controller
{


    public function viewcategory(){
        $categories = Category::all();
        return view('products-category',compact('categories'));
    }

    public function viewcategoryinMenu(){
        $cat = Category::all(); //dd($cat);
        return view('index',compact('cat'));

    }

}
