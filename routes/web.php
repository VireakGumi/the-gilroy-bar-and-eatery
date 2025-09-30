<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VenueController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dining', [VenueController::class, 'dining'])->name('dining');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
