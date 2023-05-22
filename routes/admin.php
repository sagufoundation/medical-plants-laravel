<?php
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ContributorController;
use App\Http\Controllers\admin\LocationController;
use App\Http\Controllers\admin\PlantController;
use App\Http\Controllers\admin\IconController;




// Route::prefix('admin')->middleware('auth')->group(function () {
// Route::prefix('admin')->group(function () {

Route::group(['middleware' => ['role:admin','verified']], function () {
Route::prefix('admin')->group(function () {

    Route::controller(DashboardController::class)->group(function(){
        Route::get('/','index')->name('admin.dashboard');
        Route::get('setting','setting')->name('admin.setting');
    });

    Route::controller(ContributorController::class)->group(function(){
        Route::get('contributor','index')->name('admin.contributor');
        Route::get('contributor/publish','publish')->name('admin.contributor.publish');
        Route::get('contributor/review','review')->name('admin.contributor.review');
        Route::get('contributor/draft','draft')->name('admin.contributor.draft');

        Route::get('contributor/create','create')->name('admin.contributor.create');
        Route::post('contributor','store')->name('admin.contributor.store');

        Route::get('contributor/{id}','show')->name('admin.contributor.show');
        Route::get('contributor/{id}/edit','edit')->name('admin.contributor.edit');
        Route::put('contributor/{id}','update')->name('admin.contributor.update');
        Route::delete('contributor/{id}','destroy')->name('admin.contributor.destroy');
        Route::delete('contributor/delete/{id}','delete')->name('admin.contributor.delete');
    });

    Route::controller(IconController::class)->group(function(){
        Route::get('icon','index')->name('admin.icon');

        Route::get('icon/create','create')->name('admin.icon.create');
        Route::post('icon','store')->name('admin.icon.store');

        Route::get('icon/{id}','show')->name('admin.icon.show');
        Route::get('icon/{id}/edit','edit')->name('admin.icon.edit');
        Route::put('icon/{id}','update')->name('admin.icon.update');
        Route::delete('icon/{id}','destroy')->name('admin.icon.destroy');
        Route::delete('icon/delete/{id}','delete')->name('admin.icon.delete');
    });

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

    });
});
