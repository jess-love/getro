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
        $produits = Product::with('product_images')
                            ->where('status',1)->get()->take(12);
        $products_slog = Product::where('status', 1)
            ->pluck('slog')
            ->take(5)
            ->toArray();
//        dd($products_slog);
        return view('index',compact('produits', 'products_slog'));
    }


    public function getProductsBySlog($slog)
    {
        $view_products_slug = Product::with('product_images')
            ->where('slog', $slog)->get();

        // Passer les produits et le slog à la vue 'products_slug'
        return view('products_slug', compact('view_products_slug', 'slog'));
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
