<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryIndexPage extends Controller
{
    public function CategoryIndexpage(){
        $categories = Category::all();
//        return view('layouts.master', compact('categories'));
        return view('index',['categories', $categories]);
    }
}

