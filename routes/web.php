<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE';
});


Route::namespace('Web')->group(function () {
    Route::get('/', 'WebController@homepage')->name('homepage');
    Route::get('/about', 'WebController@about')->name('about');
    Route::get('/contact', 'WebController@contact')->name('contact');
    Route::post('/contact', 'WebController@contactStore');
    Route::get('/product/category/{id}', 'WebController@productCategory')->name('product.category');
    });


 Route::get('/dashboard', function () {
    return view('account.admin.dashboard');
 })->middleware(['auth'])->name('dashboard');

//  SHIPPING CART
 /* ================= product shopping cart  ==================================*/

 Route::namespace('Web')->group(function () {
        Route::post('product/add_to_cart', 'ShoppingCartController@store')->name('product.add_to_cart');
        Route::post('product/addtocart', 'ShoppingCartController@storesingle')->name('product.single.cart');
        Route::post('product/cart_update', 'ShoppingCartController@update');
        Route::get('product/cart', 'ShoppingCartController@productscart')->name('product.cart');
        Route::post('product/cart/item/destroy/', 'ShoppingCartController@destroy')->name('product.cart.destroy');


        //for ajax call
        Route::get('/product/shopping/cart/count/ajax','ShoppingCartController@showcartcount')->name('product.cart.count.ajax');
        Route::get('/product/carttable/ajax','ShoppingCartController@showcarttable')->name('product.cartable.ajax');
        Route::get('/product/cartsummery/ajax','ShoppingCartController@showcartsummery')->name('product.cartsummery.ajax');
        Route::post('/product/incrementCart','ShoppingCartController@update')->name('product.incrementCart');
        Route::post('/product/decrementCart','ShoppingCartController@decrementCart')->name('product.decrementCart');
        Route::post('/product/remove_cart','ShoppingCartController@remove_cart')->name('product.remove_cart');

        Route::get('products/cart','ShoppingCartController@productscart')->name('product.cart.list');

        Route::post('products/cart/store','ShoppingCartController@cartStore')->name('product.cart.store');
        // Route::get('products/billing','ShoppingCartController@productsbilling')->name('product.billing');

});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/vendor.php';
require __DIR__.'/user.php';


