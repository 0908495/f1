<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();

        return view('/drivers', compact('drivers'));
    }
}
