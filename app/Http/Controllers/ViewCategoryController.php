<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\sub_category;
use Illuminate\Http\Request;

class ViewCategoryController extends Controller
{


    public function viewcategory(){
        $categories = Category::all();
        $sous_categories = sub_category::all();
        $sub_cat = sub_category::all();
        return view('products-category',compact('categories','sub_cat', 'sous_categories'));
    }


    public function viewcategoryinMenu(){
        $cat = Category::all(); //dd($cat);
        return view('index',compact('cat'));

    }

    public function viewcategories(){
        $cat = Category::all(); //dd($cat);
        return view('products-category',compact('cat'));

    }

    public function view_sub_categories(){
        $sous_categories = sub_category::all();
//        dd($sous_categories);
        return view('products-category',compact('sous_categories'));

    }

}
