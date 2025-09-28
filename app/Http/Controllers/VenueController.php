<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class VenueController extends Controller
{
    public function dining()
    {
        return view('dining');
    }
}
