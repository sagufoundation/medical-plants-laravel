<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['role:admin','verified']], function () {

    Route::prefix('admin')->group(function () { 
        require_once('admin/dashboard.php');
        require_once('admin/contributor.php');
        require_once('admin/icon.php');
        require_once('admin/plant.php');
        require_once('admin/location.php');    
    });
});
