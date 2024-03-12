<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    require_once 'dashboard/settings.php';
    require_once 'dashboard/plants.php';
    require_once 'dashboard/locations.php';
    require_once 'dashboard/icons.php';
    require_once 'dashboard/contributors.php';

    require_once 'dashboard/users.php';
    require_once 'dashboard/provinces.php';
    require_once 'dashboard/regencies.php';
    require_once 'dashboard/tribes.php';

});
