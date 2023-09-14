<?php 

use App\Http\Controllers\admin\ContributorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin > Contributor Routes
|--------------------------------------------------------------------------
|
*/

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