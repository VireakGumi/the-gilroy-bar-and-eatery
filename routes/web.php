<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/send-enquiry', [EnquiryController::class, 'send'])->name('send.enquiry');
