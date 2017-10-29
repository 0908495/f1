<?php

namespace App\Http\Controllers;

use App\Track;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TracksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tracks = Track::all();

        return view('/tracks', compact('tracks'));
    }
}
