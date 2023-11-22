<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\sub_category;
use Illuminate\Http\Request;

class ViewCategoryController extends Controller
{


    public function viewcategory(){

        return view('products-category');
    }

    public function viewcategoryinMenu(){
//        $cat_and_sub = sub_category::with('CategoryFunc')->get()->groupBy('category_id');
//
//        return view('index', ['cat_and_sub' => $cat_and_sub]);
        $cat = Category::all(); //dd($cat);
        return view('index',compact('cat'));

//        $cat_and_sub= sub_category::with('CategoryFunc')->get()->groupBy('category_id');
//        dd($cat_and_sub);

    }

}
