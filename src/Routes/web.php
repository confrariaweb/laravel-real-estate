<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\RealEstate\Controllers')
    ->group(function () {

        Route::prefix('real-estate')
            ->name('real-estate.')
            ->group(function () {

            Route::prefix('properties')
                ->name('properties.')
                ->group(function () {
                    Route::get('datatable', 'PropertyController@datatables')->name('datatables');
                
                    Route::prefix('types')
                        ->name('types.')
                        ->group(function () {
                            Route::get('datatable', 'PropertyTypeController@datatables')->name('datatables');
                        });
                    Route::resource('types', PropertyTypeController::class);
                });

            Route::resource('properties', PropertyController::class);

        });

    });
