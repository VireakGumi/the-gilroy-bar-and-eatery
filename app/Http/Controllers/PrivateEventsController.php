<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateEventsController extends Controller
{
    public function privateEvents()
    {
        return view('private_events');
    }
}
