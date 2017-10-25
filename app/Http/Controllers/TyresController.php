<?php

namespace App\Http\Controllers;

use App\Tyre;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TyresController extends Controller
{
    public function index()
    {
        $tyres = Tyre::all();

        return view('/tyres', compact('tyres'));
    }
}
