<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatOnController extends Controller
{
    public function index() {
        return view("whaton");
    }
}
