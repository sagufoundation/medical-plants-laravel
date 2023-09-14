<?php

use App\Http\Controllers\Dashboard\PackagesController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | packages
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () {

        Route::controller(PackagesController::class)->group(function(){

            // index
            Route::get('packages','index')->name('dashboard.packages');

            // publish
            Route::get('packages/publish','index')->name('dashboard.packages.publish');

            // draft
            Route::get('packages/draft','draft')->name('dashboard.packages.draft');

            // create
            Route::get('packages/create','create')->name('dashboard.packages.create');

            // store
            Route::post('packages','store')->name('dashboard.packages.store');

            // show
            Route::get('packages/{id}/show','show')->name('dashboard.packages.show');

            // edit
            Route::get('packages/{id}/edit','edit')->name('dashboard.packages.edit');

            // update
            Route::put('packages/update/{id}','update')->name('dashboard.packages.update');

            // destroy
            Route::delete('packages/destroy/{id}','destroy')->name('dashboard.packages.destroy');

            // trash
            Route::get('packages/trash','trash')->name('dashboard.packages.trash');

            // restore
            Route::post('packages/restore/{id}','restore')->name('dashboard.packages.restore');

            // delete
            Route::delete('packages/delete/{id}','delete')->name('dashboard.packages.delete');

        });
    });
