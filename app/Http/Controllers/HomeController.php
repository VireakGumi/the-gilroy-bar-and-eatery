<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $slides = [
            "https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A5756-HDR-scaled.jpg",
            "https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A5738-HDR-scaled.jpg",
            "https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A2012-HDR-scaled.jpg",
            "https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A2000-HDR-scaled.jpg",
            "https://stellarestaurantbar.com.au/wp-content/uploads/2024/07/054A1911-HDR-scaled.jpg",
            "https://stellarestaurantbar.com.au/wp-content/uploads/2024/09/054A1716-scaled.jpg",
            "https://stellarestaurantbar.com.au/wp-content/uploads/2024/09/0Q8A8610-scaled.jpg",
        ];

        $instagramImages = [
            "https://stellarestaurantbar.com.au/wp-content/uploads/sb-instagram-feed-images/532704149_18019957034736492_2114741785170287429_nfull.webp",
            "https://stellarestaurantbar.com.au/wp-content/uploads/sb-instagram-feed-images/531803497_18019868960736492_5852735712712095253_nfull.webp",
            "https://stellarestaurantbar.com.au/wp-content/uploads/sb-instagram-feed-images/531737422_18019757930736492_6193833969805108454_nfull.webp",
            "https://stellarestaurantbar.com.au/wp-content/uploads/sb-instagram-feed-images/528654692_18019288826736492_4344750693245790134_nfull.webp",
        ];

        $venues = [
            [
                'name' => 'The Gilroy Bar & Eatery',
                'venue_url' => '#gilroy-bar-eatery',
                'booking_url' => 'https://bookings.nowbookit.com/?accountid=6b8a8752-7eb2-49d7-8095-168dc2fdddc3&venueid=14008&theme=light&colors=hex,33691e,ffea00',
                'image_url' => 'https://www.datocms-assets.com/127859/1754626386-pt_20240814_margaret0757.jpg?auto=format&w=1227',
                'menu_link' => '/menu/margaret', // ADDED for event section
            ],
            [
                'name' => 'Next Door',
                'venue_url' => '#next-door',
                'booking_url' => 'https://bookings.nowbookit.com/?accountid=6b8a8752-7eb2-49d7-8095-168dc2fdddc3&venueid=14008&theme=light&colors=hex,33691e,ffea00',
                'image_url' => 'https://www.datocms-assets.com/127859/1724481569-next-door-interior3.jpg?auto=format&w=1440',
                'menu_link' => '/menu/next-door', // ADDED for event section
            ],
            [
                'name' => 'Gran Torino',
                'venue_url' => '#gran-torino',
                'booking_url' => 'https://bookings.nowbookit.com/?accountid=6b8a8752-7eb2-49d7-8095-168dc2fdddc3&venueid=14008&theme=light&colors=hex,33691e,ffea00',
                'image_url' => 'https://www.datocms-assets.com/127859/1754533308-73.png?auto=format&w=1440',
                'menu_link' => '/menu/gran-torino', // ADDED for event section
            ],
            [
                'name' => 'Bar Torino',
                'venue_url' => '#bar-torino',
                'booking_url' => 'https://bookings.nowbookit.com/?accountid=6b8a8752-7eb2-49d7-8095-168dc2fdddc3&venueid=14008&theme=light&colors=hex,33691e,ffea00',
                'image_url' => 'https://www.datocms-assets.com/127859/1754030444-bt.jpg?auto=format&w=678',
                'menu_link' => '/menu/bar-torino', // ADDED for event section
            ],
            [
                'name' => 'Events by Neil Perry',
                'venue_url' => '#events-by-neil-perry',
                'booking_url' => 'https://bookings.nowbookit.com/?accountid=6b8a8752-7eb2-49d7-8095-168dc2fdddc3&venueid=14008&theme=light&colors=hex,33691e,ffea00', // External link example
                'image_url' => 'https://www.datocms-assets.com/127859/1754461672-aci_tourismcalifornia_2025sydney-36.jpg?auto=format&w=1600',
                'menu_link' => '/menu/events', // ADDED for event section
            ],
        ];

        // In HomeController - enhanced events data
        // $events = [
        //     [
        //         'name' => 'MARGARET X DON JALO',
        //         'date' => '12TH FEBRUARY',
        //         'location' => 'MARGARET',
        //         'menu_link' => '/menu/margaret',
        //         'description' => 'On 10th and 12th February 2026 Margaret Double Bay (No. 2 World\'s Best Steak Restaurant) and Don Julio Buenos Aires (No. 1 World\'s Best Steak Restaurant) will come together in a once in a lifetime collaboration! Tickets will be released on 1st December. Subscribe to receive all the exciting updates.',
        //         'booking_url' => '/booking/margaret'
        //     ],
        //     [
        //         'name' => 'AUSTRALIA\'S BEST BURGER',
        //         'date' => '-',
        //         'location' => 'NEXT DOOR',
        //         'menu_link' => '/menu/next-door',
        //         'description' => 'Experience Australia\'s most acclaimed burger at Next Door. Our chefs have perfected the art of burger craftsmanship using premium local ingredients and innovative flavor combinations. Available every weekend from 12 PM.',
        //         'booking_url' => '/booking/next-door'
        //     ],
        //     [
        //         'name' => 'WINE DINNER SERIES',
        //         'date' => 'UPCOMING',
        //         'location' => 'MARGARET',
        //         'menu_link' => '/menu/margaret',
        //         'description' => 'Join us for an exclusive wine pairing dinner featuring premium Australian wines carefully selected to complement Chef Neil Perry\'s signature dishes.',
        //         'booking_url' => '/booking/margaret'
        //     ],
        //     [
        //         'name' => 'COCKTAIL MASTERCLASS',
        //         'date' => 'UPCOMING',
        //         'location' => 'BAR TORINO',
        //         'menu_link' => '/menu/bar-torino',
        //         'description' => 'Learn the art of cocktail making from our expert mixologists. Includes hands-on training and tasting of signature Bar Torino cocktails.',
        //         'booking_url' => '/booking/bar-torino'
        //     ],
        //     [
        //         'name' => 'ITALIAN WINE TASTING',
        //         'date' => '15TH NOVEMBER',
        //         'location' => 'GRAN TORINO',
        //         'menu_link' => '/menu/gran-torino',
        //         'description' => 'Explore the finest Italian wines with our sommelier. Perfect for wine enthusiasts looking to expand their knowledge of Italian varietals.',
        //         'booking_url' => '/booking/gran-torino'
        //     ],
        // ];

        $events = [
            [
                'name' => 'Tuesday oyster night - All you can eat',
                'date' => '-',
                'location' => '-',
                'menu_link' => '-',
                'description' => '-',
                'booking_url' => '-'
            ],
            [
                'name' => "New year's Eve",
                'date' => '-',
                'location' => '-',
                'menu_link' => '-',
                'description' => '-',
                'booking_url' => '-'
            ],
        ];

        // FIX: Pass all required variables
        return view('home', compact('slides', 'instagramImages', 'venues', 'events'));
    }
}
