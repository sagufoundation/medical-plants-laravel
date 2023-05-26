<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Visitor\VisitorController;

/*
|--------------------------------------------------------------------------
| VISITOR ROUTES
|--------------------------------------------------------------------------
|
*/

// Redirect to '/home'
Route::get('/', function() {
    return redirect('/home');
});

Route::controller(VisitorController::class)->group(function(){

    // MAIN PAGE
    Route::get('/home','index')->name('visitor.home');

    // STATIC PAGES
    Route::get('/the-plants','thePlants')->name('visitor.thePlants');
    Route::get('/overview','overview')->name('visitor.overview');
    Route::get('/how-to-contribute','howToContribute')->name('visitor.howToContribute');
    Route::get('/our-sponsors','ourSponsors')->name('visitor.ourSponsors');
    Route::get('/connect-with-us','connectWithUs')->name('visitor.connectWithUs');

    // DYNAMIC PAGES
    Route::get('/json','json')->name('json');
    Route::post('/filter','filter')->name('filter');
    Route::post('/location','location')->name('location');
    Route::get('/tribe/{id}','tribe')->name('tribe');
    Route::get('/detail-plant/{id}','detail_plant')->name('detail-plant');
    
    // AUTH PAGES
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
| VISITOR ROUTES
|--------------------------------------------------------------------------
|
*/

// Require Visitor Routes
require_once 'visitor.php';


/*
|--------------------------------------------------------------------------
| CONTRIBUTOR ROUTES
|--------------------------------------------------------------------------
|
*/

// Require Contributor Routes
require_once 'contributor.php';

Auth::routes();

