<?php

// VISITOR CONTROLLERS

use App\Http\Controllers\Dashboard\PesanController;
use App\Http\Controllers\Visitor\HomeController;

// dashboard CONTROLLERS
use App\Http\Controllers\DashboardController;

// OTHER CONTROLLERS
use App\Http\Controllers\UserController;

// OTHER CLASSES
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;


/*
|--------------------------------------------------------------------------
| VISITOR
|--------------------------------------------------------------------------
*/

// Mengalihkan he alamat beranda
Route::get('/', function () {
    return redirect('/login');
});

// // BERANDA
// Route::get('/home', [HomeController::class, 'index'])->name('home');


Auth::routes([
    'register' => false
]);


/*
| CK EDITOR
|
*/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['prefix' => '/dashboard', 'middleware' => ['web', 'auth','checkUserStatus']], function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});


require_once 'dashboard.php';
require_once 'profil.php';

