<?php

use Illuminate\Support\Facades\Route;



Route::prefix('user')
    ->as('user.')
    ->namespace('Account\User')
    ->middleware(['user'])
    ->group(function () {
        // Dashboard
        Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
        Route::get('/order/all', 'UserController@orderAll')->name('order.all');
        Route::get('/order/billing/{id}', 'UserController@orderBilling')->name('order.billing');




    });




