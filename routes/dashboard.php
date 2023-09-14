<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware('auth')->group(function () {

    require_once 'dashboard/settings.php';
    require_once 'dashboard/plants.php';
    require_once 'dashboard/locations.php';
    require_once 'dashboard/icons.php';
    require_once 'dashboard/contributors.php';

    require_once 'dashboard/users.php';

});
