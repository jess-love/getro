<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use App\Models\sub_category;
use Illuminate\View\View;

class HeaderComposer
{


    public function compose(View $view){

        $view->with('categories',Category::where('slug',1)->get());

    }

    public function sub_category(View $view){

        $view->with('sub_categories',sub_category::all()->get());

    }



}
