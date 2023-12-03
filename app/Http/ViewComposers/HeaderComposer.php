<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use App\Models\Product;
use App\Models\sub_category;
use Illuminate\View\View;

class HeaderComposer
{


    public function compose(View $view){

        $catAndSub = sub_category::with('CategoryFunc')->get()->groupBy('category_id');
        $view->with('cat_and_sub', $catAndSub);
//        dd('$catAndSub');


    }






}
