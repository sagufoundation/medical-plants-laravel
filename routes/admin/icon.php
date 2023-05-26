<?php 

use App\Http\Controllers\admin\IconController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin > Icon Routes
|--------------------------------------------------------------------------
|
*/

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