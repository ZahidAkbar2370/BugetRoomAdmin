<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;


class CityController extends Controller
{
    // show data
    public function index()
    {
        $allCities = City::all();

        return view('admin.city.view', compact('allCities'));
    }
}
