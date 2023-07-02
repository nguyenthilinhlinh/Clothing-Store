<?php

namespace App\Providers;

use App\Models\VisitorCount;
use Illuminate\Http\Request;
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

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        //
             
        view()->composer('*',function($view) {
            $view->with('counter',VisitorCount::count(['sessionKey']));
               
        });
        

    }
}
