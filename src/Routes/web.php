<?php

use ConfrariaWeb\RealEstate\Controllers\DashboardController;
use ConfrariaWeb\RealEstate\Controllers\DomainController;
use ConfrariaWeb\RealEstate\Controllers\PropertyController;
use ConfrariaWeb\RealEstate\Controllers\PropertyTypeController;
use ConfrariaWeb\RealEstate\Controllers\Site\HomeController;
use ConfrariaWeb\RealEstate\Controllers\Site\PageController;
use ConfrariaWeb\RealEstate\Controllers\TagController;
use ConfrariaWeb\RealEstate\Controllers\SiteController;
use ConfrariaWeb\RealEstate\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['web', 'auth'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('domains', DomainController::class);
        Route::prefix('properties')
            ->name('properties.')
            ->group(function () {
                Route::resource('types', PropertyTypeController::class);
            });
        Route::resource('properties', PropertyController::class);
        Route::resource('sites', SiteController::class);
        Route::resource('tags', TagController::class);
        Route::resource('users', UserController::class);
    });

Route::middleware(['web'])
    ->group(function () {
        require __DIR__.'/auth.php';

        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/{slug}', [PageController::class, 'index'])->name('page');

    });