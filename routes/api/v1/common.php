<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SlidersController;
use App\Http\Controllers\Api\MessagesController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\TourEventsController;
use App\Http\Controllers\Api\TourPackagesController;
use App\Http\Controllers\Api\TourAdventuresController;
use App\Http\Controllers\Api\TourDestinationsController;


Route::prefix('v1')->middleware(['api'])->group(function () {

    // packages
    Route::get('/tour-packages', [TourPackagesController::class, 'index']);
    Route::get('/tour-packages/{slug}/detail', [TourPackagesController::class, 'show']);

    // destinations
    Route::get('/tour-destinations', [TourDestinationsController::class, 'index']);
    Route::get('/tour-destinations/{slug}/detail', [TourDestinationsController::class, 'show']);

    // adventures
    Route::get('/tour-adventures', [TourAdventuresController::class, 'index']);
    Route::get('/tour-adventures/{slug}/detail', [TourAdventuresController::class, 'show']);

    // events
    Route::get('/tour-events', [TourEventsController::class, 'index']);
    Route::get('/tour-events/{slug}/detail', [TourEventsController::class, 'show']);

    // messages
    Route::post('/messages/store', [MessagesController::class, 'store']);

    // sliders
    Route::get('/sliders', [SlidersController::class, 'index']);
    Route::get('/sliders/{slug}/detail', [SlidersController::class, 'show']);

    // settings
    Route::get('/settings', [SettingsController::class, 'index']);



});



// Route::prefix('v1')->middleware(['checkHeader'])->group(function () {


//     Route::get('/users', [TourPackagesController::class, 'test']);

// });




