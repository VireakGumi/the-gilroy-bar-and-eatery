<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
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

        return view('home', compact('slides', 'instagramImages'));
    }
}
