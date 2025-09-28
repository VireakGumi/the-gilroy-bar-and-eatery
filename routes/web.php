<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/private-events', function () {
    return view('private_events');
})->name('private-events');