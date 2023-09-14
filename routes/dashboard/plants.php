<?php

use App\Http\Controllers\Dashboard\AdventuresController;
use App\Http\Controllers\Dashboard\PlantsController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | adventures
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(PlantsController::class)->group(function(){

            // index
            Route::get('plants','index')->name('dashboard.plants');

            // publish
            Route::get('plants/publish','index')->name('dashboard.plants.publish');

            // draft
            Route::get('plants/draft','draft')->name('dashboard.plants.draft');

            // create
            Route::get('plants/create','create')->name('dashboard.plants.create');

            // store
            Route::post('plants','store')->name('dashboard.plants.store');

            // show
            Route::get('plants/{id}/show','show')->name('dashboard.plants.show');

            // edit
            Route::get('plants/{id}/edit','edit')->name('dashboard.plants.edit');

            // update
            Route::put('plants/update/{id}','update')->name('dashboard.plants.update');

            // destroy
            Route::delete('plants/destroy/{id}','destroy')->name('dashboard.plants.destroy');

            // trash
            Route::get('plants/trash','trash')->name('dashboard.plants.trash');

            // restore
            Route::post('plants/restore/{id}','restore')->name('dashboard.plants.restore');

            // delete
            Route::delete('plants/delete/{id}','delete')->name('dashboard.plants.delete');

        });
    });
