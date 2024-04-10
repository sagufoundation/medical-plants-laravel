<?php

use App\Http\Controllers\Dashboard\RegencyController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | sliders
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(RegencyController::class)->group(function(){

            // index
            Route::get('regencies','index')->name('dashboard.regencies');

            // publish
            Route::get('regencies/publish','index')->name('dashboard.regencies.publish');

            // draft
            Route::get('regencies/draft','draft')->name('dashboard.regencies.draft');

            // create
            Route::get('regencies/create','create')->name('dashboard.regencies.create');

            // store
            Route::post('regencies','store')->name('dashboard.regencies.store');

            // show
            Route::get('regencies/{id}/show','show')->name('dashboard.regencies.show');

            // edit
            Route::get('regencies/{id}/edit','edit')->name('dashboard.regencies.edit');

            // update
            Route::put('regencies/update/{id}','update')->name('dashboard.regencies.update');

            // destroy
            Route::delete('regencies/destroy/{id}','destroy')->name('dashboard.regencies.destroy');

            // trash
            Route::get('regencies/trash','trash')->name('dashboard.regencies.trash');

            // restore
            Route::post('regencies/restore/{id}','restore')->name('dashboard.regencies.restore');

            // delete
            Route::delete('regencies/delete/{id}','delete')->name('dashboard.regencies.delete');

        });
    });
