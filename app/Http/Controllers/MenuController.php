<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        $pdfMenu = [
            'Downstairs Menu' => 'storage/pdf/menu/gilroy_Downstairs-A3_Aug25_v2.pdf',
            'Set Menu $65pp' => 'storage/pdf/menu/gilroy_Menu_A5_Set-Menu-65PP.pdf',
            'Set Menu $85pp' => 'storage/pdf/menu/gilroy_Menu_A5_Set-Menu-85PP.pdf',
            'Set Menu $109pp' => 'storage/pdf/menu/gilroy_Menu_A5_Set-Menu-109PP.pdf',
            'Canapes Menu' => 'storage/pdf/menu/gilroy_Menu_A5_Canapes_Aug25.pdf',
            'Cocktail Lounge Menu' => 'storage/pdf/menu/gilroy_Cocktail-lounge-A4_Aug25_v2.pdf',
            'Rooftop Menu' => 'storage/pdf/menu/gilroy_Main-Menu_A3_Roof-Top_Feb25.pdf',
            'Cigar Menu' => 'storage/pdf/menu/gilroy_Cigar-Menu.pdf',
            'Dessert Menu' => 'storage/pdf/menu/gilroy_A5_Dessert_Aug25.pdf',
            'Bottomless Brunch' => 'storage/pdf/menu/gilroy_Menu_A5_Bottomless-Brunch_2-1-1.pdf',
            'Drinks List' => 'storage/pdf/menu/gilroy_Beverage-Menu_Jan-29.pdf',
        ];
        $imagesMenu = [
            'images/menu/TIV4179.jpg',
            'images/menu/TIV4216.jpg',
            'images/menu/TIV4231.jpg',
            'images/menu/TIV4248.jpg',
            'images/menu/TIV4300.jpg',
            'images/menu/TIV4348.jpg',
            'images/menu/TIV4399.jpg',
            'images/menu/TIV4431.jpg',
            'images/menu/TIV4465.jpg',
            'images/menu/TIV4600.jpg',
            'images/menu/TIV4617.jpg',
            'images/menu/TIV4643.jpg',
            'images/menu/TIV4652.jpg',
        ];
        return view('menu', compact('pdfMenu', 'imagesMenu'));
    }
}
