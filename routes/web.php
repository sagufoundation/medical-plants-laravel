<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(DashboardController::class)->group(function(){
    Route::get('/','index')->name('user.dasboard');
    Route::get('/plant','plant')->name('user.plant');
    Route::get('/contributor','contributor')->name('user.contributor');
    Route::get('/overview','overview')->name('user.overview');
    Route::get('/sponsor','sponsor')->name('user.sponsor');
    Route::get('/connect-with-us','connent')->name('user.connent');
    Route::get('/json','json')->name('json');
    Route::post('/filter','filter')->name('filter');
    Route::post('/location','location')->name('location');
    Route::get('/tribe/{id}','tribe')->name('tribe');
    Route::get('/detail-plant/{id}','detail_plant')->name('detail-plant');
    // Route::get('/connent','connent')->name('user.connent');
    Route::get('/login','login')->name('login');
});




// USER
require_once 'user.php';

// ADMIN
require_once 'admin.php';

// CONTRIBUTOR
require_once 'contributor.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
