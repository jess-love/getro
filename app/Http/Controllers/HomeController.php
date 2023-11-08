<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $produits = Product::all()->take(12);

        return view('index',compact('produits'));
    }


    public function ViewCategory(){

        $categorys = Category::all()->where('slug',1);

        // dd($caregorys);

        return view('products-category',compact('categorys'));
    }




    public function product(Request $request){

        $produit = Product::all()->find($request->id);

        return view('product-details',compact('produit'));

    }

    public function lang($locale) {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }
}
