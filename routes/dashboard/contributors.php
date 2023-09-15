<?php

use App\Http\Controllers\Dashboard\ContributorsController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | packages
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(ContributorsController::class)->group(function(){

            // index
            Route::get('contributors','index')->name('dashboard.contributors');

            // publish
            Route::get('contributors/publish','index')->name('dashboard.contributors.publish');

            // draft
            Route::get('contributors/draft','draft')->name('dashboard.contributors.draft');

            // create
            Route::get('contributors/create','create')->name('dashboard.contributors.create');

            // store
            Route::post('contributors','store')->name('dashboard.contributors.store');

            // show
            Route::get('contributors/{id}/show','show')->name('dashboard.contributors.show');

            // edit
            Route::get('contributors/{id}/edit','edit')->name('dashboard.contributors.edit');

            // update
            Route::put('contributors/update/{id}','update')->name('dashboard.contributors.update');

            // destroy
            Route::delete('contributors/destroy/{id}','destroy')->name('dashboard.contributors.destroy');

            // trash
            Route::get('contributors/trash','trash')->name('dashboard.contributors.trash');

            // restore
            Route::post('contributors/restore/{id}','restore')->name('dashboard.contributors.restore');

            // delete
            Route::delete('contributors/delete/{id}','delete')->name('dashboard.contributors.delete');

        });
    });
