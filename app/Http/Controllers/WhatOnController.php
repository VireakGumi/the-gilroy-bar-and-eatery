<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatOnController extends Controller
{
    public function index() {
              // In HomeController - enhanced events data
        $events = [
            [
                'name' => 'MARGARET X DON JALO',
                'date' => '12TH FEBRUARY',
                'location' => 'THE GILORY BAR & EATERY',
                'menu_link' => '/menu/margaret',
                'description' => 'On 10th and 12th February 2026 Margaret Double Bay (No. 2 World\'s Best Steak Restaurant) and Don Julio Buenos Aires (No. 1 World\'s Best Steak Restaurant) will come together in a once in a lifetime collaboration! Tickets will be released on 1st December. Subscribe to receive all the exciting updates.',
                'booking_url' => '/booking/margaret'
            ],
            [
                'name' => 'AUSTRALIA\'S BEST BURGER',
                'date' => '-',
                'location' => 'NEXT DOOR',
                'menu_link' => '/menu/next-door',
                'description' => 'Experience Australia\'s most acclaimed burger at Next Door. Our chefs have perfected the art of burger craftsmanship using premium local ingredients and innovative flavor combinations. Available every weekend from 12 PM.',
                'booking_url' => '/booking/next-door'
            ],
        ];
        return view("whaton", compact('events'));
    }
}
