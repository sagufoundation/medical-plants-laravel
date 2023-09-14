<?php

use App\Http\Controllers\Dashboard\DestinationsController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | destinations
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () {

        Route::controller(DestinationsController::class)->group(function(){

            // index
            Route::get('destinations','index')->name('dashboard.destinations');

            // publish
            Route::get('destinations/publish','index')->name('dashboard.destinations.publish');

            // draft
            Route::get('destinations/draft','draft')->name('dashboard.destinations.draft');

            // create
            Route::get('destinations/create','create')->name('dashboard.destinations.create');

            // store
            Route::post('destinations','store')->name('dashboard.destinations.store');

            // show
            Route::get('destinations/{id}/show','show')->name('dashboard.destinations.show');

            // edit
            Route::get('destinations/{id}/edit','edit')->name('dashboard.destinations.edit');

            // update
            Route::put('destinations/update/{id}','update')->name('dashboard.destinations.update');

            // destroy
            Route::delete('destinations/destroy/{id}','destroy')->name('dashboard.destinations.destroy');

            // trash
            Route::get('destinations/trash','trash')->name('dashboard.destinations.trash');

            // restore
            Route::post('destinations/restore/{id}','restore')->name('dashboard.destinations.restore');

            // delete
            Route::delete('destinations/delete/{id}','delete')->name('dashboard.destinations.delete');

        });
    });
