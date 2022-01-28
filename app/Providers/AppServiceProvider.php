<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
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
        // dd($this->app->environment());
        // DB::listen(function($query) {
        //     logger()->info($query->sql . print_r($query->bindings, true));
        // });

        Schema::defaultStringLength(191);
    }
}
