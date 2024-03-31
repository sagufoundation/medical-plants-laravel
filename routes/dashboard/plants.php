<?php

use App\Http\Controllers\Dashboard\AdventuresController;
use App\Http\Controllers\Dashboard\PlantsController;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | adventures
    | index, publish, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:admin']], function () {

        Route::controller(PlantsController::class)->group(function(){

            // index
            Route::get('plants','index')->name('dashboard.plants');

            // publish
            Route::get('plants/publish','index')->name('dashboard.plants.publish');

            // draft
            Route::get('plants/draft','draft')->name('dashboard.plants.draft');

            // create
            Route::get('plants/create','create')->name('dashboard.plants.create');

            // store
            Route::post('plants','store')->name('dashboard.plants.store');

            // show
            Route::get('plants/{id}/show','show')->name('dashboard.plants.show');

            // edit
            Route::get('plants/{id}/edit','edit')->name('dashboard.plants.edit');

            // update
            Route::put('plants/update/{id}','update')->name('dashboard.plants.update');








            // edit "image_cover" 
            Route::get('plants/cover/{id}/edit','edit_image')->name('dashboard.plants.edit_image_cover');
            // edit "image_daun" 
            Route::get('plants/daun/{id}/edit','edit_image')->name('dashboard.plants.edit_image_daun');
            // edit "image_buah" 
            Route::get('plants/buah/{id}/edit','edit_image')->name('dashboard.plants.edit_image_buah');
            // edit "image_pohon" 
            Route::get('plants/pohon/{id}/edit','edit_image')->name('dashboard.plants.edit_image_pohon');
            // edit "image_bunga" 
            Route::get('plants/bunga/{id}/edit','edit_image')->name('dashboard.plants.edit_image_bunga');
            // edit "image_batang" 
            Route::get('plants/batang/{id}/edit','edit_image')->name('dashboard.plants.edit_image_batang');
            // edit "image_keseluruhan" 
            Route::get('plants/keseluruhan/{id}/edit','edit_image')->name('dashboard.plants.edit_image_keseluruhan');

            // // update "image_cover" 
            Route::put('plants/update/image/{id}','update_images')->name('dashboard.plants.update_images');

            Route::delete('plants/delete/image/{id}','delete_images')->name('dashboard.plants.delete_images');















            // destroy
            Route::delete('plants/destroy/{id}','destroy')->name('dashboard.plants.destroy');

            // trash
            Route::get('plants/trash','trash')->name('dashboard.plants.trash');

            // restore
            Route::post('plants/restore/{id}','restore')->name('dashboard.plants.restore');

            // delete
            Route::delete('plants/delete/{id}','delete')->name('dashboard.plants.delete');

        });
    });
