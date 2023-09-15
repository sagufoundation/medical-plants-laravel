<?php

use App\Http\Controllers\Dashboard\DestinationsController;
use App\Http\Controllers\Dashboard\LocationController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | locations
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(LocationController::class)->group(function(){

            // index
            Route::get('locations','index')->name('dashboard.locations');

            // publish
            Route::get('locations/publish','index')->name('dashboard.locations.publish');

            // draft
            Route::get('locations/draft','draft')->name('dashboard.locations.draft');

            // create
            Route::get('locations/create','create')->name('dashboard.locations.create');

            // store
            Route::post('locations','store')->name('dashboard.locations.store');

            // show
            Route::get('locations/{id}/show','show')->name('dashboard.locations.show');

            // edit
            Route::get('locations/{id}/edit','edit')->name('dashboard.locations.edit');

            // update
            Route::put('locations/update/{id}','update')->name('dashboard.locations.update');

            // destroy
            Route::delete('locations/destroy/{id}','destroy')->name('dashboard.locations.destroy');

            // trash
            Route::get('locations/trash','trash')->name('dashboard.locations.trash');

            // restore
            Route::post('locations/restore/{id}','restore')->name('dashboard.locations.restore');

            // delete
            Route::delete('locations/delete/{id}','delete')->name('dashboard.locations.delete');

        });
    });
