<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $details = [
            'The Gilory Bar & Eatery' => [
                'img' => 'images/venues2.png',
                'short_desc' => 'The Gilory offers full venue hire for large celebrations, group reservations in the main dining area and a semi-private dining area for small events.',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                "location" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                'space_capacity' => [50, 100],
                'detail_page' => []
            ],
            'Next Door' => [
                'img' => 'images/event2.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                "location" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                'space_capacity' => [50, 100],
                'detail_page' => []
            ],
            'Gran Torino' => [
                'img' => 'images/event3.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                "location" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                'space_capacity' => [50, 100],
                'detail_page' => []
            ],
            'Bar Torino' => [
                'img' => 'images/event4.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                "location" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                'space_capacity' => [50, 100],
                'detail_page' => []
            ],
            'Events by Neil Perry' => [
                'img' => 'images/venues5.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                "location" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                'space_capacity' => [50, 100],
                'detail_page' => []
            ],
        ];
        return view('event', compact('details'));
    }
}
