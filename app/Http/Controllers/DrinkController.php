<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function drinkMenu(){
        // dd('Hello');
        return view('drink-menu');
    }
}