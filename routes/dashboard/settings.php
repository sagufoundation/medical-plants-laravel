<?php

// dashboard CONTROLLERS
use App\Http\Controllers\Dashboard\SettingsController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | settings
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(SettingsController::class)->group(function(){

            // index
            Route::get('settings','index')->name('dashboard.settings');

            // edit
            Route::get('settings/edit/','edit')->name('dashboard.settings.edit');

            // update
            Route::put('settings/update/','update')->name('dashboard.settings.update');

        });
    });
