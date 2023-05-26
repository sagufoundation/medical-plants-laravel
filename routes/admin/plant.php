<?php 

use App\Http\Controllers\admin\PlantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin > Plant Routes
|--------------------------------------------------------------------------
|
*/

Route::controller(PlantController::class)->group(function(){
    Route::get('plant','index')->name('admin.plant');
    Route::get('plant/create','create')->name('admin.plant.create');
    Route::post('plant','store')->name('admin.plant.store');
    Route::get('plant/publish','publish')->name('admin.plant.publish');
    Route::get('plant/review','review')->name('admin.plant.review');
    Route::get('plant/draft','draft')->name('admin.plant.draft');
    Route::get('plant/{id}','show')->name('admin.plant.show');
    Route::get('plant/{id}/edit','edit')->name('admin.plant.edit');
    Route::put('plant/{id}','update')->name('admin.plant.update');
    Route::delete('plant/{id}','destroy')->name('admin.plant.destroy');
});