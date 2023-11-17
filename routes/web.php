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
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'ViewCategory'])->name('CategoryIndexPage');



Route::get('/products-category', [App\Http\Controllers\ViewCategoryController::class, 'ViewCategory'])->name('CategoryProduct');
Route::get('/category', [App\Http\Controllers\CategoryIndexPage::class, 'CategoryIndexpage'])->name('Category');


Route::get('categoryMenu',[App\Http\Controllers\ViewCategoryController::class, 'viewcategoryinMenu']);


Route::get('/produitToCart/{id}',[App\Http\Controllers\CartController::class,'addProductToCart'])->name('ProductToCart');

 //route pour shoppingcart
Route::post('/cart/post',[App\Http\Controllers\CartController::class,'add'])->name('post.add');
Route::post('/panier/index','CartController@index')->name('panier_index');




Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('logout', [TonerController::class, 'logout']);

    Route::get('{any}', [TonerController::class, 'index']);
});
