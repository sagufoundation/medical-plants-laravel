<?php

namespace App\Providers;

// MODELS
use App\Models\Settings;
use App\Models\User;
use App\Models\TourAdventures;
use App\Models\TourDestinations;
use App\Models\TourEvents;
use App\Models\TourMessages;
use App\Models\TourPackages;
use App\Models\TourSliders;

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
        Paginator::useBootstrap();

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
            // 'packages_total' => TourPackages::count(),
            // 'destinations_total' => TourDestinations::count(),
            // 'adventures_total' => TourAdventures::count(),
            // 'events_total' => TourEvents::count(),
            // 'messages_total' => TourMessages::count(),
            // 'sliders_total' => TourSliders::count(),
            // 'users_total' => User::count(),

        ]);

    }

}
