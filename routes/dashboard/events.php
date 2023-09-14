<?php

use App\Http\Controllers\Dashboard\EventsController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | events
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () {

        Route::controller(EventsController::class)->group(function(){

            // index
            Route::get('events','index')->name('dashboard.events');

            // publish
            Route::get('events/publish','index')->name('dashboard.events.publish');

            // draft
            Route::get('events/draft','draft')->name('dashboard.events.draft');

            // create
            Route::get('events/create','create')->name('dashboard.events.create');

            // store
            Route::post('events','store')->name('dashboard.events.store');

            // show
            Route::get('events/{id}/show','show')->name('dashboard.events.show');

            // edit
            Route::get('events/{id}/edit','edit')->name('dashboard.events.edit');

            // update
            Route::put('events/update/{id}','update')->name('dashboard.events.update');

            // destroy
            Route::delete('events/destroy/{id}','destroy')->name('dashboard.events.destroy');

            // trash
            Route::get('events/trash','trash')->name('dashboard.events.trash');

            // restore
            Route::post('events/restore/{id}','restore')->name('dashboard.events.restore');

            // delete
            Route::delete('events/delete/{id}','delete')->name('dashboard.events.delete');

        });
    });
