<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivateEventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\DrinkController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about-us', function () {
    return view('about_us');
})->name('about-us');


Route::get('/dining', [VenueController::class, 'dining'])->name('dining');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/private-events', [PrivateEventsController::class, 'privateEvents'])->name('private-events');
Route::get('/drink-menu', [DrinkController::class, 'drinkMenu'])->name('drink-menu');
Route::get('/', [HomeController::class, 'home'])->name('home');
