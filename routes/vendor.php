    <?php

    use Illuminate\Support\Facades\Route;



    Route::prefix('vendor')
        ->as('vendor.')
        ->namespace('Account\Vendor')
        ->middleware(['vendor'])
        ->group(function () {
            // Dashboard
            Route::get('/dashboard', 'VendorController@dashboard')->name('dashboard');


            Route::resources([

                'product' => 'ProductController',
            ]);

            Route::get('/order/all','VendorController@orderAll')->name('order.all');
            Route::get('/order/billing/{id}','VendorController@orderBilling')->name('order.billing');



        });




