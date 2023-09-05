<?php

namespace App\Providers;

use App\Models\Pengaturan;
use App\Models\Plant;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Pagination\Paginator;

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
        // Paginator::defaultView('pagination::default');

        view()->share([
            'pengaturan' => Pengaturan::first(),
            'total_plants' => Plant::count(),
            'total_plants' => Plant::where('id_province', 1)->count(),

        ]);
    }
}
