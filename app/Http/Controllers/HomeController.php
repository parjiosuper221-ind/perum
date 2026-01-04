<?php

namespace App\Http\Controllers;

use App\Models\Property;

class HomeController
{
    public function index()
    {
        $properties = Property::where('featured', 1)->get();
        return view('home.index', compact('properties'));
    }
}