<?php 

use App\Http\Controllers\admin\LocationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin > Location Routes
|--------------------------------------------------------------------------
|
*/

Route::controller(LocationController::class)->group(function(){
    Route::get('location','index')->name('admin.location');

    Route::get('location/json','json')->name('admin.json');

    Route::get('location/publish','publish')->name('admin.location.publish');
    Route::get('location/review','review')->name('admin.location.review');
    Route::get('location/draft','draft')->name('admin.location.draft');
    Route::get('location/create','create')->name('admin.location.create');
    Route::get('location/{id}','show')->name('admin.location.show');


    Route::post('location','store')->name('admin.location.store');
    Route::get('location/{id}/edit','edit')->name('admin.location.edit');
    Route::put('location/{id}','update')->name('admin.location.update');
    Route::delete('location/{id}','destroy')->name('admin.location.destroy');
    // Route::delete('location/delete/{id}','delete')->name('admin.location.delete');
});