<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = auth()->user();

        if ($users instanceof User) {
            $users->load(['address' => function ($query) {
                $query->select('address.*');
            }]);
        }
//        dd($users);
        return view('checkout', ['users' => $users]);


    }

    public function ViewCartCheckout() {
        $users = Auth::user();
        $productsWithImages = Product::with(['product_images', 'cart'])->whereHas('cart', function($query) use ($users) {
            $query->where('user_id', $users->id);
        })->get();
        $products = Product::with('product_images')
            ->where('slog', 'New Arrival')
            ->where('status', 1)
            ->take(4)
            ->get();
//        dd($products);
        return view('checkout', compact('productsWithImages', 'users', 'products'));
    }



}
