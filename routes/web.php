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
Route::get('/category', [App\Http\Controllers\CategoryIndexPage::class, 'CategoryIndexpage'])->name('Category');
Route::get('/categoryMenu',[App\Http\Controllers\ViewCategoryController::class, 'viewcategoryinMenu']);


//Route::get('/sub/category', [App\Http\Controllers\CategoryController::class, 'sub'])->name('sub');

Route::get('/products-category', [App\Http\Controllers\ViewCategoryController::class, 'ViewCategory'])->name('CategoryProduct');
Route::get('/categoryMenu',[App\Http\Controllers\ViewCategoryController::class, 'viewcategoryinMenu']);      //->name('CategoryMenu');



Route::get('categoryMenu',[App\Http\Controllers\ViewCategoryController::class, 'viewcategoryinMenu']);
Route::get('/produitToCart/{id}',[App\Http\Controllers\CartController::class,'addProductToCart'])->name('ProductToCart');


Route::get('categoryMenu',[App\Http\Controllers\ViewCategoryController::class, 'viewcategoryinMenu']);


//route add to cart


Route::get('/produitToCart/{id}',[App\Http\Controllers\CartController::class,'addProductToCart'])->name('ProductToCart');
//Route to shop-cart view
Route::get('/shop-cart',[App\Http\Controllers\CartController::class,'shopcart'])->name('shopCart');
 //route pour shoppingcart


//route pour produit en liaison avec les sous-categories
Route::get('/products/{sub_category_id}', [App\Http\Controllers\ProductController::class, 'product'])->name('products_nav');
//Route::get('/produits', [App\Http\Controllers\ProductController::class, 'ViewAllProduct'])->name('view_all_products');
Route::get('/souscategories', [App\Http\Controllers\ProductController::class, 'Sub_Categories'])->name('sub_categories');

Route::post('/cart/{id}',[App\Http\Controllers\CartController::class,'add'])->name('post_add');
Route::get('/panier/index',[App\Http\Controllers\CartController::class,'index'])->name('cart_index');

//route pour remove item
Route::delete('/remove',[App\Http\Controllers\CartController::class,'removeItem'])->name('remove.item');
//route pour delete all items from cart
Route::delete('/panier/clear',[App\Http\Controllers\CartController::class,'clearCart'])->name('clear.cart');
//recherche de produit
Route::get('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('search');
//abonnement au site  dans la page produit
Route::post('/subscribe', [App\Http\Controllers\SubscriptionController::class, 'subscribe'])->name('subscribe');

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('logout', [TonerController::class, 'logout']);

    Route::get('{any}', [TonerController::class, 'index']);
});
