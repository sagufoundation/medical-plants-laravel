<?php

use App\Http\Controllers\Dashboard\ProvinceController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | sliders
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(ProvinceController::class)->group(function(){

            // index
            Route::get('provinces','index')->name('dashboard.provinces');

            // publish
            Route::get('provinces/publish','index')->name('dashboard.provinces.publish');

            // draft
            Route::get('provinces/draft','draft')->name('dashboard.provinces.draft');

            // create
            Route::get('provinces/create','create')->name('dashboard.provinces.create');

            // store
            Route::post('provinces','store')->name('dashboard.provinces.store');

            // show
            // Route::get('provinces/{id}/show','show')->name('dashboard.provinces.show');

            // edit
            Route::get('provinces/{id}/edit','edit')->name('dashboard.provinces.edit');

            // update
            Route::put('provinces/update/{id}','update')->name('dashboard.provinces.update');

            // destroy
            Route::delete('provinces/destroy/{id}','destroy')->name('dashboard.provinces.destroy');

            // trash
            Route::get('provinces/trash','trash')->name('dashboard.provinces.trash');

            // restore
            Route::post('provinces/restore/{id}','restore')->name('dashboard.provinces.restore');

            // delete
            Route::delete('provinces/delete/{id}','delete')->name('dashboard.provinces.delete');

        });
    });
