<?php

use App\Http\Controllers\Dashboard\MessagesController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | messages
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () {

        Route::controller(MessagesController::class)->group(function(){

            // index
            Route::get('messages','index')->name('dashboard.messages');

            // publish
            Route::get('messages/publish','index')->name('dashboard.messages.publish');

            // draft
            Route::get('messages/draft','draft')->name('dashboard.messages.draft');

            // create
            Route::get('messages/create','create')->name('dashboard.messages.create');

            // store
            Route::post('messages','store')->name('dashboard.messages.store');

            // show
            Route::get('messages/{id}/show','show')->name('dashboard.messages.show');

            // edit
            Route::get('messages/{id}/edit','edit')->name('dashboard.messages.edit');

            // update
            Route::put('messages/update/{id}','update')->name('dashboard.messages.update');

            // destroy
            Route::delete('messages/destroy/{id}','destroy')->name('dashboard.messages.destroy');

            // trash
            Route::get('messages/trash','trash')->name('dashboard.messages.trash');

            // restore
            Route::post('messages/restore/{id}','restore')->name('dashboard.messages.restore');

            // delete
            Route::delete('messages/delete/{id}','delete')->name('dashboard.messages.delete');

        });
    });
