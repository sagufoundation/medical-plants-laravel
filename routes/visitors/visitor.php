<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| TEAM
|--------------------------------------------------------------------------
|
*/

// team > all
Route::get('our-team', function() {
    return view('visitor.pages.team.all');
});

// team > developer
Route::get('our-team/developer', function() {
    return view('visitor.pages.team.developer');
});

// team > ethnobotany
Route::get('our-team/ethnobotany', function() {
    return view('visitor.pages.team.ethnobotany');
});

// team > phytochemistry
Route::get('our-team/phytochemistry', function() {
    return view('visitor.pages.team.phytochemistry');
});

// team > taxonomy
Route::get('our-team/taxonomy', function() {
    return view('visitor.pages.team.taxonomy');
});

/*
|--------------------------------------------------------------------------
| WHAT WE DO
|--------------------------------------------------------------------------
|
*/
// what we do > discover
Route::get('what-we-do/discover', function() {
    return view('visitor.pages.what-we-do.discover');
});

// what we do > researchs
Route::get('what-we-do/research', function() {
    return view('visitor.pages.what-we-do.research');
});

/*
|--------------------------------------------------------------------------
| OTHER
|--------------------------------------------------------------------------
|
*/
