<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivateEventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about-us', function () {
    return view('about_us');
})->name('about-us');


// old
Route::get('/ground-floor-area', [VenueController::class, 'groundFloorArea'])->name('ground-floor-area');
Route::get('/cocktail-dining-area', [VenueController::class, 'cocktailDiningArea'])->name('cocktail-dining-area');
Route::get('/private-dining', [VenueController::class, 'pravateDining'])->name('private-dining');
Route::get('/rooftop-terrace', [VenueController::class, 'rooftopTerrace'])->name('rooftop-terrace');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/navigation', [NavigationController::class, 'navigation'])->name('navigation');
Route::get('/private-events', [PrivateEventsController::class, 'privateEvents'])->name('private-events');
Route::get('/drink-menu', [DrinkController::class, 'drinkMenu'])->name('drink-menu');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/career', [CareerController::class, 'career'])->name('career');

// New
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/events', [EventController::class, 'index'])->name('events');


