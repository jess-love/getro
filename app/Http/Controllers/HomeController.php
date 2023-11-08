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

<<<<<<< HEAD
    public function ViewCategory(){
=======



    public function product(Request $request){

        $produit = Product::all()->find($request->id);

        return view('product-details',compact('produit'));

    }

    //public function ViewCategory(){

      // $cat = Category::all();

     //dump($cat);
>>>>>>> a3670ba8d739f0a6af27ccb5c16962ff3315b97f

      // return view('products-category',compact('cat'));
   // }

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
