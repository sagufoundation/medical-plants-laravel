<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\DashboardController;

/*
|--------------------------------------------------------------------------
| VISITOR ROUTES
|--------------------------------------------------------------------------
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


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
|
*/

// Require Admin Routes
require_once 'admin.php';


/*
|--------------------------------------------------------------------------
| CONTRIBUTOR ROUTES
|--------------------------------------------------------------------------
|
*/


// Require Contributor Routes
require_once 'contributor.php';

Auth::routes();

