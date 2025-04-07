<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // parent::boot();

        // Route::middleware('web')
        //     ->group(base_path('routes/web.php'));

        // Route::middleware('web')
        //     ->prefix('action')
        //     ->group(base_path('routes/action.php')); 

        // Route::middleware('api')
        //     ->prefix('api')
        //     ->group(base_path('routes/api.php'));
    }
}
