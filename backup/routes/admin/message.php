<?php 

use App\Http\Controllers\admin\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin > message Routes
|--------------------------------------------------------------------------
|
*/

Route::controller(MessageController::class)->group(function(){
    Route::get('message','index')->name('admin.message');
    Route::get('message/publish','publish')->name('admin.message.publish');
    Route::get('message/review','review')->name('admin.message.review');
    Route::get('message/draft','draft')->name('admin.message.draft');

    Route::get('message/create','create')->name('admin.message.create');
    Route::post('message','store')->name('admin.message.store');

    Route::get('message/{id}','show')->name('admin.message.show');
    Route::get('message/{id}/edit','edit')->name('admin.message.edit');
    Route::put('message/{id}','update')->name('admin.message.update');
    Route::delete('message/{id}','destroy')->name('admin.message.destroy');
    Route::delete('message/delete/{id}','delete')->name('admin.message.delete');
});