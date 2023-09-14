<?php

use App\Http\Controllers\Dashboard\SlidersController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | sliders
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () {

        Route::controller(SlidersController::class)->group(function(){

            // index
            Route::get('sliders','index')->name('dashboard.sliders');

            // publish
            Route::get('sliders/publish','index')->name('dashboard.sliders.publish');

            // draft
            Route::get('sliders/draft','draft')->name('dashboard.sliders.draft');

            // create
            Route::get('sliders/create','create')->name('dashboard.sliders.create');

            // store
            Route::post('sliders','store')->name('dashboard.sliders.store');

            // show
            Route::get('sliders/{id}/show','show')->name('dashboard.sliders.show');

            // edit
            Route::get('sliders/{id}/edit','edit')->name('dashboard.sliders.edit');

            // update
            Route::put('sliders/update/{id}','update')->name('dashboard.sliders.update');

            // destroy
            Route::delete('sliders/destroy/{id}','destroy')->name('dashboard.sliders.destroy');

            // trash
            Route::get('sliders/trash','trash')->name('dashboard.sliders.trash');

            // restore
            Route::post('sliders/restore/{id}','restore')->name('dashboard.sliders.restore');

            // delete
            Route::delete('sliders/delete/{id}','delete')->name('dashboard.sliders.delete');

        });
    });
