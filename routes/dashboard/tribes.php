<?php

use App\Http\Controllers\Dashboard\TribesController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | sliders
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(TribesController::class)->group(function(){

            // index
            Route::get('tribes','index')->name('dashboard.tribes');

            // publish
            Route::get('tribes/publish','index')->name('dashboard.tribes.publish');

            // draft
            Route::get('tribes/draft','draft')->name('dashboard.tribes.draft');

            // create
            Route::get('tribes/create','create')->name('dashboard.tribes.create');

            // store
            Route::post('tribes','store')->name('dashboard.tribes.store');

            // show
            // Route::get('tribes/{id}/show','show')->name('dashboard.tribes.show');

            // edit
            Route::get('tribes/{id}/edit','edit')->name('dashboard.tribes.edit');

            // update
            Route::put('tribes/update/{id}','update')->name('dashboard.tribes.update');

            // destroy
            Route::delete('tribes/destroy/{id}','destroy')->name('dashboard.tribes.destroy');

            // trash
            Route::get('tribes/trash','trash')->name('dashboard.tribes.trash');

            // restore
            Route::post('tribes/restore/{id}','restore')->name('dashboard.tribes.restore');

            // delete
            Route::delete('tribes/delete/{id}','delete')->name('dashboard.tribes.delete');

        });
    });
