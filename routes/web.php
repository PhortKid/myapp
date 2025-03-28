<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemsController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');




Route::resource('workspace',App\Http\Controllers\DashboardController::class)->middleware(['auth']);
Route::resource('workspace_items',App\Http\Controllers\ItemsController::class)->middleware(['auth']);


require __DIR__.'/auth.php';
