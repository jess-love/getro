<?php

use App\Http\Controllers\TonerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewCategoryController;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/product-list-details', [App\Http\Controllers\ProductListDefaultController::class, 'index'])->name('product-list-details');
Route::get('/product-details/{id}', [App\Http\Controllers\ProductdetailController::class, 'ViewProduitDetail'])->name('view_product');
Route::get('/products-category', [App\Http\Controllers\HomeController::class, 'ViewCategory'])->name('CategoryProduct');

Route::get('/products-category', [App\Http\Controllers\ViewCategoryController::class, 'ViewCategory'])->name('CategoryProduct');
Route::get('/categories',[App\Http\Controllers\ViewCategoryController::class, 'viewcategories'])->name('VoirCategories');

Route::get('/products-category', [App\Http\Controllers\ViewCategoryController::class, 'ViewCategory'])->name('CategoryProduct');
Route::get('/products-sub-category', [App\Http\Controllers\ViewCategoryController::class, 'view_sub_categories'])->name('SubCategoryProduct');


//route pour produit en liaison avec les sous-categories
Route::get('/products/{sub_category_id}', [App\Http\Controllers\ProductController::class, 'product_list_right'])->name('products_nav');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'product_list_left'])->name('products_left');

Route::get('/souscategories', [App\Http\Controllers\ProductController::class, 'Sub_Categories_Product_list_Right'])->name('sub_categories');

//recherche de produit
Route::get('/search/{sub_category_id}', [App\Http\Controllers\ProductController::class, 'search'])->name('search');
Route::get('/searches', [App\Http\Controllers\ProductController::class, 'Search_list_left'])->name('search_list_left');

//abonnement au site  dans la page produit
Route::post('/subscribe', [App\Http\Controllers\SubscriptionController::class, 'subscribe'])->name('subscribe');



//------------------cart route----------------------------------------
//Route::get('/shop-cart',[App\Http\Controllers\CartController::class,'shopcart'])->name('shopCart');

Route::post('/update-cart',[App\Http\Controllers\CartController::class,'updateCart'])->name('cart-update');
Route::post('/delete-item',[App\Http\Controllers\CartController::class,'deleteItem'])->name('delete-item');


//------------------end route cart----------------------------------------

//Route::get('/produits', [App\Http\Controllers\ProductController::class, 'ViewAllProduct'])->name('view_all_products');



Route::get('/produitToCart/{id}',[App\Http\Controllers\CartController::class,'addProductToCart'])->name('ProductToCart');


Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('logout', [TonerController::class, 'logout']);


    Route::post('/add-to-cart',[App\Http\Controllers\CartController::class,'AddToCart'])->name('addToCart');
    Route::get('/shop-cart',[App\Http\Controllers\CartController::class,'ViewCart'])->name('shopCart');

    Route::get('{any}', [TonerController::class, 'index']);
});
