<?php

use App\Http\Controllers\Dashboard\IconController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | events
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(IconController::class)->group(function(){

            // index
            Route::get('icons','index')->name('dashboard.icons');

            // publish
            Route::get('icons/publish','index')->name('dashboard.icons.publish');

            // draft
            Route::get('icons/draft','draft')->name('dashboard.icons.draft');

            // create
            Route::get('icons/create','create')->name('dashboard.icons.create');

            // store
            Route::post('icons','store')->name('dashboard.icons.store');

            // show
            Route::get('icons/{id}/show','show')->name('dashboard.icons.show');

            // edit
            Route::get('icons/{id}/edit','edit')->name('dashboard.icons.edit');

            // update
            Route::put('icons/update/{id}','update')->name('dashboard.icons.update');

            // destroy
            Route::delete('icons/destroy/{id}','destroy')->name('dashboard.icons.destroy');

            // trash
            Route::get('icons/trash','trash')->name('dashboard.icons.trash');

            // restore
            Route::post('icons/restore/{id}','restore')->name('dashboard.icons.restore');

            // delete
            Route::delete('icons/delete/{id}','delete')->name('dashboard.icons.delete');

        });
    });
