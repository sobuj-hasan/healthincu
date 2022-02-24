<?php

namespace App\Providers;

use App\Models\User;
use App\Models\WebSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $websetting = WebSetting::find(1) ?? new WebSetting();
            $view->with('websetting',$websetting);
        });
   
    }
}
