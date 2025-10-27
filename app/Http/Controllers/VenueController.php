<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function pravateDining()
    {
        return view('old.private_dining');
    }

    public function groundFloorArea()
    {
        return view('old.ground_floor_area');
    }

    public function cocktailDiningArea()
    {
        return view('old.cocktail_dining_area');
    }

    public function rooftopTerrace()
    {
        return view('old.rooftop_terrace');
    }

    public function index()
    {

        $details = [
            'margaret' => [
                'img' => 'images/venues1.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'desc' => 'Margaret has proudly been named the No. 2 Steak Restaurant in the World and No. 1 in Australia for 2025 - a reflection of our uncompromising commitment to excellence in both produce and hospitality.


Situated in Sydney’s Double Bay, at its core, Margaret is a celebration of the deep relationships Neil Perry has built over decades with Australia’s most dedicated farmers and fishermen. The restaurant is driven by these trusted partnerships, resulting in an offering that showcases not only world-class wild-caught seafood, but also one of the most respected and carefully curated meat programs in the country.


A focus on Australia’s extraordinary seafood remains central to Neil’s cuisine, proudly featured throughout the menu alongside premium cuts of beef sourced through a network of producers committed to ethical, sustainable practices.


With dishes that change daily depending on the finest seasonal ingredients available to us, Margaret is a dynamic expression of produce, craft, and care - where the best ingredients, wines, and service come together in a truly memorable dining experience.


Margaret is named after Neil Perry’s late mother who was the matriarch of the family, the nurturer and carer, and the one who held everyone together. These wonderful qualities became the inspiration behind the CARE philosophy that Neil created; caring for our suppliers, each other, the community and environment, which he has applied throughout his entire career as a chef and restaurateur.


“Margaret is a neighbourhood restaurant, but it’s also evolved into something more than that. At its core, it’s about comfort, generosity and cosiness.” — Neil Perry',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                'view_menu' => [
                    "À La Carte Menu" => 'storage/pdf/menu/gilroy_Downstairs-A3_Aug25_v2.pdf',
                    "Dessert Menu" => 'storage/pdf/menu/gilroy_Menu_A5_Set-Menu-65PP.pdf'
                ],
                'detail_page' => []
            ],
            'Next Door' => [
                'img' => 'images/venues2.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'desc' => 'Margaret has proudly been named the No. 2 Steak Restaurant in the World and No. 1 in Australia for 2025 - a reflection of our uncompromising commitment to excellence in both produce and hospitality.


Situated in Sydney’s Double Bay, at its core, Margaret is a celebration of the deep relationships Neil Perry has built over decades with Australia’s most dedicated farmers and fishermen. The restaurant is driven by these trusted partnerships, resulting in an offering that showcases not only world-class wild-caught seafood, but also one of the most respected and carefully curated meat programs in the country.


A focus on Australia’s extraordinary seafood remains central to Neil’s cuisine, proudly featured throughout the menu alongside premium cuts of beef sourced through a network of producers committed to ethical, sustainable practices.


With dishes that change daily depending on the finest seasonal ingredients available to us, Margaret is a dynamic expression of produce, craft, and care - where the best ingredients, wines, and service come together in a truly memorable dining experience.


Margaret is named after Neil Perry’s late mother who was the matriarch of the family, the nurturer and carer, and the one who held everyone together. These wonderful qualities became the inspiration behind the CARE philosophy that Neil created; caring for our suppliers, each other, the community and environment, which he has applied throughout his entire career as a chef and restaurateur.


“Margaret is a neighbourhood restaurant, but it’s also evolved into something more than that. At its core, it’s about comfort, generosity and cosiness.” — Neil Perry',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                'view_menu' => [
                    "À La Carte Menu" => 'storage/pdf/menu/gilroy_Downstairs-A3_Aug25_v2.pdf',
                    "Dessert Menu" => 'storage/pdf/menu/gilroy_Menu_A5_Set-Menu-65PP.pdf'
                ],
                'detail_page' => []
            ],
            'Gran Torino' => [
                'img' => 'images/venues3.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'desc' => 'Margaret has proudly been named the No. 2 Steak Restaurant in the World and No. 1 in Australia for 2025 - a reflection of our uncompromising commitment to excellence in both produce and hospitality.


Situated in Sydney’s Double Bay, at its core, Margaret is a celebration of the deep relationships Neil Perry has built over decades with Australia’s most dedicated farmers and fishermen. The restaurant is driven by these trusted partnerships, resulting in an offering that showcases not only world-class wild-caught seafood, but also one of the most respected and carefully curated meat programs in the country.


A focus on Australia’s extraordinary seafood remains central to Neil’s cuisine, proudly featured throughout the menu alongside premium cuts of beef sourced through a network of producers committed to ethical, sustainable practices.


With dishes that change daily depending on the finest seasonal ingredients available to us, Margaret is a dynamic expression of produce, craft, and care - where the best ingredients, wines, and service come together in a truly memorable dining experience.


Margaret is named after Neil Perry’s late mother who was the matriarch of the family, the nurturer and carer, and the one who held everyone together. These wonderful qualities became the inspiration behind the CARE philosophy that Neil created; caring for our suppliers, each other, the community and environment, which he has applied throughout his entire career as a chef and restaurateur.


“Margaret is a neighbourhood restaurant, but it’s also evolved into something more than that. At its core, it’s about comfort, generosity and cosiness.” — Neil Perry',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                'view_menu' => [
                    "À La Carte Menu" => 'storage/pdf/menu/gilroy_Downstairs-A3_Aug25_v2.pdf',
                    "Dessert Menu" => 'storage/pdf/menu/gilroy_Menu_A5_Set-Menu-65PP.pdf'
                ],
                'detail_page' => []
            ],
            'Bar Torino' => [
                'img' => 'images/venues4.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'desc' => 'Margaret has proudly been named the No. 2 Steak Restaurant in the World and No. 1 in Australia for 2025 - a reflection of our uncompromising commitment to excellence in both produce and hospitality.


Situated in Sydney’s Double Bay, at its core, Margaret is a celebration of the deep relationships Neil Perry has built over decades with Australia’s most dedicated farmers and fishermen. The restaurant is driven by these trusted partnerships, resulting in an offering that showcases not only world-class wild-caught seafood, but also one of the most respected and carefully curated meat programs in the country.


A focus on Australia’s extraordinary seafood remains central to Neil’s cuisine, proudly featured throughout the menu alongside premium cuts of beef sourced through a network of producers committed to ethical, sustainable practices.


With dishes that change daily depending on the finest seasonal ingredients available to us, Margaret is a dynamic expression of produce, craft, and care - where the best ingredients, wines, and service come together in a truly memorable dining experience.


Margaret is named after Neil Perry’s late mother who was the matriarch of the family, the nurturer and carer, and the one who held everyone together. These wonderful qualities became the inspiration behind the CARE philosophy that Neil created; caring for our suppliers, each other, the community and environment, which he has applied throughout his entire career as a chef and restaurateur.


“Margaret is a neighbourhood restaurant, but it’s also evolved into something more than that. At its core, it’s about comfort, generosity and cosiness.” — Neil Perry',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                'view_menu' => [
                    "À La Carte Menu" => 'storage/pdf/menu/gilroy_Downstairs-A3_Aug25_v2.pdf',
                    "Dessert Menu" => 'storage/pdf/menu/gilroy_Menu_A5_Set-Menu-65PP.pdf'
                ],
                'detail_page' => []
            ],
            'Events by Neil Perry' => [
                'img' => 'images/venues5.png',
                'short_desc' => 'A modern Australian restaurant where the freshest possible sustainable seafood and produce is paired with a curated selection of wines.',
                'desc' => 'Margaret has proudly been named the No. 2 Steak Restaurant in the World and No. 1 in Australia for 2025 - a reflection of our uncompromising commitment to excellence in both produce and hospitality.


Situated in Sydney’s Double Bay, at its core, Margaret is a celebration of the deep relationships Neil Perry has built over decades with Australia’s most dedicated farmers and fishermen. The restaurant is driven by these trusted partnerships, resulting in an offering that showcases not only world-class wild-caught seafood, but also one of the most respected and carefully curated meat programs in the country.


A focus on Australia’s extraordinary seafood remains central to Neil’s cuisine, proudly featured throughout the menu alongside premium cuts of beef sourced through a network of producers committed to ethical, sustainable practices.


With dishes that change daily depending on the finest seasonal ingredients available to us, Margaret is a dynamic expression of produce, craft, and care - where the best ingredients, wines, and service come together in a truly memorable dining experience.


Margaret is named after Neil Perry’s late mother who was the matriarch of the family, the nurturer and carer, and the one who held everyone together. These wonderful qualities became the inspiration behind the CARE philosophy that Neil created; caring for our suppliers, each other, the community and environment, which he has applied throughout his entire career as a chef and restaurateur.


“Margaret is a neighbourhood restaurant, but it’s also evolved into something more than that. At its core, it’s about comfort, generosity and cosiness.” — Neil Perry',
                'view_detail' => [
                    "30-36 Bay St, Double Bay NSW" => 'https://maps.app.goo.gl/YWvwXGPvHqnxQvfH9',
                    '(02) 9068 8888' => 'tel:0295244958'
                ],
                'view_menu' => [
                    "À La Carte Menu" => 'storage/pdf/menu/gilroy_Downstairs-A3_Aug25_v2.pdf',
                    "Dessert Menu" => 'storage/pdf/menu/gilroy_Menu_A5_Set-Menu-65PP.pdf'
                ],
                'detail_page' => []
            ],
        ];
        return view('venues', compact('details'));
    }
}
