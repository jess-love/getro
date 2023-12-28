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
Route::get('/get-products-by-slog/{slog}', [App\Http\Controllers\HomeController::class, 'getProductsBySlog'])->name('getProductsBySlog');



Route::get('/products-category', [App\Http\Controllers\ViewCategoryController::class, 'ViewCategory'])->name('CategoryProduct');
Route::get('/categories',[App\Http\Controllers\ViewCategoryController::class, 'viewcategories'])->name('VoirCategories');

Route::get('/products-category', [App\Http\Controllers\ViewCategoryController::class, 'ViewCategory'])->name('CategoryProduct');
Route::get('/products-sub-category', [App\Http\Controllers\ViewCategoryController::class, 'view_sub_categories'])->name('SubCategoryProduct');


//wish list
Route::post('/wishlist/add', [App\Http\Controllers\WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'showWishlist'])->name('wishlist.show');
Route::get('/wishlist/remove/{id}', [App\Http\Controllers\WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
Route::post('/wishlist/toggle', [App\Http\Controllers\WishlistController::class, 'toggleWishlist'])->name('wishlist.toggle');


//route pour produit en liaison avec les sous-categories
Route::get('/products/{sub_category_id}', [App\Http\Controllers\ProductController::class, 'product_list_right'])->name('products_nav');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'product_list_left'])->name('products_left');
Route::get('/souscategories', [App\Http\Controllers\ProductController::class, 'Sub_Categories_Product_list_Right'])->name('sub_categories');
Route::get('/product-watches', [App\Http\Controllers\ProductController::class, 'productSpecificProduct'])->name('productWatches');


//recherche de produit
Route::get('/search/{sub_category_id}', [App\Http\Controllers\ProductController::class, 'search'])->name('search');
Route::get('/searches', [App\Http\Controllers\ProductController::class, 'Search_list_left'])->name('search_list_left');

//abonnement au site  dans la page produit
Route::post('/subscribe', [App\Http\Controllers\SubscriptionController::class, 'subscribe'])->name('subscribe');

//route pour gerer les informations du compte de l'utilisateur
Route::get('/my_account', [App\Http\Controllers\UserController::class, 'MonCompte'])->name('myaccount');
Route::post('/update-profile', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('update-profile');

//------------------Start route adresse----------------------------------------
Route::get('/adresse',[App\Http\Controllers\UserController::class,'Address'])->name('address');
Route::post('/addAddress', [App\Http\Controllers\UserController::class,'addAddress'])->name('addAddress');
Route::get('/remove-address/{id}', [App\Http\Controllers\UserController::class, 'removeAddress'])->name('removeAddress');
Route::post('/adresse',[App\Http\Controllers\UserController::class,'deleteAddress'])->name('deleteAddress');
Route::post('/update-address/{addressId}', [App\Http\Controllers\UserController::class, 'updateAddress'])->name('update.address');

//------------------end route adresse----------------------------------------



//------------------Start route credit cat----------------------------------------
Route::post('/session',[App\Http\Controllers\PaymentController::class,'session'])->name('session');
Route::get('/success',[App\Http\Controllers\PaymentController::class,'success'])->name('success');
Route::get('/retour',[App\Http\Controllers\PaymentController::class,'returnToProductPage'])->name('product_page');
Route::get('/confirmation/{order_key}', [App\Http\Controllers\ConfirmationController::class, 'show'])->name('confirmation');
//------------------end route credit cart----------------------------------------




//------------------Start cart route----------------------------------------
Route::post('/delete-item',[App\Http\Controllers\CartController::class,'deleteItem'])->name('delete-item');
Route::get('/produitToCart/{id}',[App\Http\Controllers\CartController::class,'addProductToCart'])->name('ProductToCart');
Route::get('/product_cart',[App\Http\Controllers\CartController::class,'ProductInCart'])->name('ProductInCart');
Route::post('/empty-cart', [App\Http\Controllers\CartController::class, 'emptyCart'])->name('empty-cart');
//------------------end route cart----------------------------------------


//------------------Start route checkout----------------------------------------
Route::get('/checkout',[App\Http\Controllers\CheckoutController::class,'index'])->name('checkout');
Route::get('/checkout-cart',[App\Http\Controllers\CheckoutController::class,'ViewCartCheckout'])->name('checkoutCart');
//------------------end route checkout----------------------------------------

//------------------Start route payment----------------------------------------
Route::post('/handle-payment', [App\Http\Controllers\PaymentController::class, 'handlePayment']);
//------------------End route payment----------------------------------------

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

    Route::get('logout', [TonerController::class, 'logout']);

    Route::post('/cart-update',[App\Http\Controllers\CartController::class,'updateCart'])->name('cart-update');
    Route::post('/addToCart',[App\Http\Controllers\CartController::class,'AddToCart'])->name('addToCart');
    Route::get('/shop-cart',[App\Http\Controllers\CartController::class,'ViewCart'])->name('shopCart');
    Route::get('/getCartItemCount', [App\Http\Controllers\CartController::class, 'getCartItemCount']);

    Route::get('{any}', [TonerController::class, 'index']);
});
