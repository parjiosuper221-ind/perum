<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomplekController extends Controller
{
    public function cityNest()
    {
        return view('komplek.citynest'); // JANGAN 'home'
    }

    public function cityHaven()
    {
        return view('komplek.cityhaven'); // JANGAN 'home'
    }

    public function ecoRow()
    {
        return view('komplek.ecorow'); // JANGAN 'home'
    }

    public function ecoLuxe()
    {
        return view('komplek.ecoluxe'); // JANGAN 'home'
    }
}