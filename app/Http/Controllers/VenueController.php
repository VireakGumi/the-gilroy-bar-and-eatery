<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function pravateDining()
    {
        return view('private_dining');
    }

    public function groundFloorArea()
    {
        return view('old_page.ground_floor_area');
    }

    public function cocktailDiningArea()
    {
        return view('old_page.cocktail_dining_area');
    }

    public function rooftopTerrace()
    {
        return view('old_page.rooftop_terrace');
    }
}
