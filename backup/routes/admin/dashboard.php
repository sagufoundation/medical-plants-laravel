<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin > Dashboard Routes
|--------------------------------------------------------------------------
|
*/

Route::controller(DashboardController::class)->group(function(){
    Route::get('/','index')->name('admin.dashboard');
    Route::get('setting','setting')->name('admin.setting');
});
