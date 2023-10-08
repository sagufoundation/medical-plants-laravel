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

        
        // Paginator::defaultView('pagination::default');
        try {
            // Your super fun database stuff
            view()->share([

                // Settings
                'settings' => Settings::first(),
    
                /*
                |
                | COUNTERS
                |
                */
                // ============== PROVINCES ==================
                'provinces_total' => Province::count(),
                'provinces_total_publish' => Location::where('status','publish')->count(),
                'provinces_total_draft' => Location::where('status','draft')->count(),
                'provinces_total_trash' => Location::onlyTrashed()->count(),

                // ============== ICONST ==================
                'icons_total' => Icon::count(),
                'icons_total_publish' => Location::where('status','publish')->count(),
                'icons_total_draft' => Location::where('status','draft')->count(),
                'icons_total_trash' => Location::onlyTrashed()->count(),
                
                // ============== LOCATIONS ==================
                'locations_total' => Location::count(),
                'locations_total_publish' => Location::where('status','publish')->count(),
                'locations_total_draft' => Location::where('status','draft')->count(),
                'locations_total_trash' => Location::onlyTrashed()->count(),

                // ============== PLANTS ==================
                'plants_total' => Plant::count(),
                'plants_total_publish' => Plant::where('status','publish')->count(),
                'plants_total_draft' => Plant::where('status','draft')->count(),
                'plants_total_trash' => Plant::onlyTrashed()->count(),
                
                // ============== CONTRIBUTORS ==================
                'contributors_total' => Contributor::count(),
                'contributors_total_publish' => Contributor::where('status','publish')->count(),
                'contributors_total_draft' => Contributor::where('status','draft')->count(),
                'contributors_total_trash' => Contributor::onlyTrashed()->count(),
                
                // ============== USERS ==================
                'users_total' => User::count(),
                'users_total_publish' => User::where('status','publish')->count(),
                'users_total_draft' => User::where('status','draft')->count(),
                'users_total_trash' => User::onlyTrashed()->count(),
    
            ]);
        } catch (\Exception $e) {
            // do nothing
        }


    }

}
