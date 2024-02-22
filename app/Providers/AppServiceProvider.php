<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

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
        // Gunakan Bootstrap 4 untuk gaya paginasi
        Paginator::useBootstrapFour();

        // Set locale menjadi 'id'
        app()->setLocale('id');

        // Set timezone menjadi 'Asia/Jakarta'
        date_default_timezone_set('Asia/Jakarta');

        // Set locale Carbon menjadi 'id'
        Carbon::setLocale('id');
    }
}
