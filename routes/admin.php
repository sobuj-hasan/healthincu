<?php

use Illuminate\Support\Facades\Route;



Route::prefix('admin')
    ->as('admin.')
    ->namespace('Account\Admin')
    ->middleware(['admin'])
    ->group(function () {
        // Dashboard
        Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');


        // Resource CRUDS
         Route::resources([
             'user' => 'UserController',
        ]);
        Route::get('user/change-password/{id}', 'UserController@adminChangePassword')->name('user.change.password');
        Route::post('user/change-password/post/{id}', 'UserController@adminChangePasswordPost')->name('user.change.password.post');
        Route::get('general-user/all', 'UserController@userAll')->name('general.user.all');
        Route::get('vendor/all', 'UserController@vendorAll')->name('vendor.all');

        Route::get('contract', 'AdminController@index')->name('contract.index');
        Route::get('delete/{id}', 'AdminController@destroy')->name('contract.destroy');


        Route::resources([
            'product-color' => 'ProductColorController',

       ]);


       Route::resources([

        'product-category' => 'ProductCategoryController',
       ]);



       Route::resources([

        'product' => 'ProductController',
       ]);








        Route::resources([
            'websetting' => 'WebSettingController',
       ]);
       Route::resources([
            'slider' => 'SliderController',
       ]);
       Route::resources([
            'social-media' => 'SocialMediaController',
       ]);
       Route::resources([
            'social-media' => 'SocialMediaController',
       ]);
       Route::resources([
            'blog-category' => 'BlogCategoryController',
       ]);
       Route::resources([
            'blog' => 'BlogController',
       ]);

    });



Route::prefix('account')
    ->as('account.')
    ->namespace('Account')
    ->group(function () {
         Route::resources([
             'profile' => 'ProfileController',
        ]);
        Route::get('password','ProfileController@password')->name('password');
        Route::post('password/change/{id}','ProfileController@changePassword')->name('change.password');


    });

Route::prefix('account')
    ->as('admin.')
    ->namespace('Account\Admin')
    ->group(function () {

        // Route::get('/order/all',[OrderController::class, 'orderAll'])->name('order.all');
        Route::get('/order/all','OrderController@orderAll')->name('order.all');
        Route::get('/order/cancel','OrderController@orderCancel')->name('order.cancel');
        Route::get('/order/confirmed','OrderController@orderConfirmed')->name('order.confirmed');
        Route::get('/order/delivered','OrderController@orderDelivered')->name('order.delivered');
        Route::get('/order/failed','OrderController@orderFailed')->name('order.failed');
        Route::get('/order/outofdelivery','OrderController@orderOutofDelivery')->name('order.outofdelivery');
        Route::get('/order/pending','OrderController@orderPending')->name('order.pending');
        Route::get('/order/processing','OrderController@orderProcessing')->name('order.processing');
        Route::get('/order/returned','OrderController@orderReturn')->name('order.returned');


        Route::get('/order/show/{id}','OrderController@orderShow')->name('order.show');
        Route::get('/order/billing/{id}','OrderController@Billing')->name('order.billing');

        Route::post('/order/status/payment/{id}','OrderController@paymentUpdate')->name('payment.update');

        Route::post('/order/status/update/{id}','OrderController@orderUpdate')->name('order.update');







    });




