<?php

// USERS CONTROLLERS
use App\Http\Controllers\Dashboard\UserController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | users
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(UserController::class)->group(function(){

            // index
            Route::get('users','index')
                ->name('dashboard.users');

            // publish
            Route::get('users/publish','index')->name('dashboard.users.publish');

            // draft
            Route::get('users/draft','draft')
                ->name('dashboard.users.draft');

            // create
            Route::get('users/create','create')
                ->name('dashboard.users.create');

            // store
            Route::post('users','store')
                ->name('dashboard.users.store');

            // show
            Route::get('users/{id}/show','show')
                ->name('dashboard.users.show');

            // edit
            Route::get('users/{id}/edit','edit')
                ->name('dashboard.users.edit');

            // update
            Route::put('users/{id}','update')
                ->name('dashboard.users.update');

            // destroy
            Route::delete('users/{id}','destroy')
                ->name('dashboard.users.destroy');

            // trash
            Route::get('users/trash','trash')
                ->name('dashboard.users.trash');

            // restore
            Route::post('users/restore/{id}','restore')
                ->name('dashboard.users.restore');

            // delete
            Route::delete('users/delete/{id}','delete')
                ->name('dashboard.users.delete');

        });
    });
