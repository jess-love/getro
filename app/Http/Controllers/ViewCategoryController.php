<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ViewCategoryController extends Controller
{


    public function viewcategory(){

        return view('products-category');
    }





    public function viewcategoryinMenu(){

        $cat = Category::all();

        //dd($cat);

        return view('index',compact('cat'));
    }

}
