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

Auth::routes();

Route::controller(VisitorController::class)->group(function(){

    // MAIN PAGE
    Route::get('/home','index')->name('visitor.home');

    // PLANTS PAGES
    Route::get('/plants','plants')->name('visitor.plants');
    Route::get('/plants/{id}/detail','plantsDetail')->name('visitor.plants.detail');
    // Route::get('/the-plants-simulation','thePlantsSimulation')->name('visitor.the-plants-simulation');
    
    // PLANTS BY REGENCY
    Route::get('/plants/regency/{regency}','plantsByRegency')->name('visitor.plantsByRegency');

    
    // SEARCH
    Route::get('/search/local-name','thePlantsSearchLocalName')->name('visitor.thePlantsSearchLocalName');
    Route::get('/search/contributor','thePlantsContributor')->name('visitor.thePlantsContributor');


    Route::get('/overview','overview')->name('visitor.overview');
    Route::get('/how-to-contribute','howToContribute')->name('visitor.howToContribute');
    Route::get('/our-sponsors','ourSponsors')->name('visitor.ourSponsors');
    Route::get('/connect-with-us','connectWithUs')->name('visitor.connectWithUs');
    
    Route::get('/privacy','privacy')->name('visitor.privacy');
    Route::get('/terms','terms')->name('visitor.terms');

    // UNTUK DEVELOP HALAMAN BOOSTRAP
    Route::get('/view','view')->name('view');

    // DYNAMIC PAGES
    Route::get('/json','json')->name('json');
    Route::post('/filter','filter')->name('filter');
    Route::post('/location','location')->name('location');
    Route::get('/tribe/{id}','tribe')->name('tribe');
    Route::get('/detail-plant/{id}','detail_plant')->name('detail-plant');

    // AUTH PAGES
    Route::get('/login','login')->name('login');
    Route::get('/logout','index')->name('logout');

});


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
|
*/

// Require Admin Routes
// require_once 'admin.php';


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




