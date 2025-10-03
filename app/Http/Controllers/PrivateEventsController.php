<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateEventsController extends Controller
{
    public function privateEvents()
    {
        $spaces = [
            [
                'id' => 'rooftop',
                'title' => 'ROOFTOP TERRACE',
                'img' => 'https://stellarestaurantbar.com.au/wp-content/uploads/2023/11/1-1024x680.jpg',
                'desc' =>
                    'Our beautiful open-air rooftop terrace featuring a vertical garden, lush plants, and a stunning bar provides the perfect setting and backdrop for your celebration. The retractable roof assists us with dealing with the unpredictable Melbourne weather providing shade and shelter. Above head heaters will also provide warmth on a cooler evening.',
                'features' => ['Standing Cocktail Event: Accommodates up to 100 guests'],
            ],
            [
                'id' => 'cocktail',
                'title' => 'COCKTAIL LOUNGE',
                'img' => 'https://stellarestaurantbar.com.au/wp-content/uploads/2024/08/054A5747-HDR-1024x683.jpg',
                'desc' =>
                    'Hosting a seated dining of up to 40 guests in our second level. Featuring luxurious soft blue velvet interior seating mixed with exceptionally comfortable grey chairs. This space is perfect for those moderately sized events wishing to host special occasions with exclusive hire with tailored menus and beverage packages.',
                'features' => [
                    'Seated Dining: Up to 45 guests',
                    'Standing Cocktail Event: Accommodates up to 100 guests',
                ],
            ],
            [
                'id' => 'ground',
                'title' => 'GROUND FLOOR AREA',
                'img' => 'https://stellarestaurantbar.com.au/wp-content/uploads/2024/08/054A2012-HDR-1024x683.jpg',
                'desc' =>
                    "We can host up to 60 guests seated in our show-stopping ground floor dining space, which is mainly used for whole venue events. This space is also perfect for larger non-exclusive group bookings from 10-30 guests. Choose from our Chef's Selection menus, with drink packages available on request.",
                'features' => [
                    'Seated Dining: Up to 60 guests',
                    'Standing Cocktail Event: Accommodates up to 100 guests',
                ],
            ],
            [
                'id' => 'private',
                'title' => 'PRIVATE DINING ROOM',
                'img' => 'https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A1918-HDR-1024x683.jpg',
                'desc' =>
                    'We can host 8 to 10 guests comfortably in our private cellar dining space. Wall to wall with wine varietals from across the globe, providing a moody and intimate setting with a considerably large marble tabletop built for a bespoke experience.',
                'features' => ['Exclusive seating for 10 guests'],
            ],
        ];
        return view('private_events', compact('spaces'));
    }
}
