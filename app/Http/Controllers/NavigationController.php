<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class NavigationController extends Controller
{
    public function navigation(){
        return view('old.navigation_menu');
    }
}
