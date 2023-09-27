<?php

namespace App\Providers;

// MODELS
use App\Models\Settings;
use App\Models\User;
use App\Models\Contributor;
use App\Models\Icon;
use App\Models\Location;
use App\Models\Plant;
use App\Models\Province;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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

        if(config('app.env') === 'production') { URL::forceScheme('https'); }

        // Pagination Configs
        // Paginator::useBootstrap();
        Paginator::useBootstrap('simple-bootstrap-4');

        // Date Configs
        $today = Carbon::today()->toDateString();
        $bulanIni = Carbon::now()->format('m');
        $tahunIni = Carbon::now()->format('Y');
        $startDate = Carbon::now()->startOfWeek();
        $endDate = Carbon::now()->endOfWeek();

        view()->share([

            // Settings
            'settings' => Settings::first(),

            // // Counts
            'provinces_total' => Province::count(),
            'icons_total' => Icon::count(),
            'locations_total' => Location::count(),
            'plant_total' => Plant::count(),
            'contributor_total' => Contributor::count(),
            'users_total' => User::count(),

        ]);

    }

}
