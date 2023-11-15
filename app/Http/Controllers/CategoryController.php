<?php

namespace App\Http\Controllers;
// use App\categories;
use App\Models\categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function ViewCategory(){

        $categories = Category::all()->where('slug',1);
 
         dd($caregories);
 
         return view('layouts.topbar',compact('categories'));
     }
}
