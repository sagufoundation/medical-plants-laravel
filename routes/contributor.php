<?php
use App\Http\Controllers\contributor\PlantController as ContributorPlant;




// Route::prefix('contributor')->middleware('contributor')->group(function () {
    Route::group(['middleware' => ['role:contributor','verified']], function () {
        Route::prefix('contributor')->group(function () {

              Route::controller(ContributorPlant::class)->group(function(){
                    Route::get('plant','index')->name('contributor.plant');
                    Route::get('plant/{id}','show')->name('contributor.plant.show');
                    Route::get('plant/draft','draft')->name('contributor.plant.draft');
                    Route::get('plant/create','create')->name('contributor.plant.create');
                    Route::post('plant','store')->name('contributor.plant.store');
                    Route::get('plant/{id}/edit','edit')->name('contributor.plant.edit');
                    Route::put('plant/{id}','update')->name('contributor.plant.update');
                    Route::delete('plant/{id}','destroy')->name('contributor.plant.destroy');
                    Route::get('plant/trash','trash')->name('contributor.plant.trash');
                    Route::post('plant/restore/{id}','restore')->name('contributor.plant.restore');
                    Route::delete('plant/delete/{id}','delete')->name('contributor.plant.delete');
            });
         });

    });
