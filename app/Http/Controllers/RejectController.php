<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RejectController extends Controller
{

    public function index()
    {
        return view('reject');
    }
}
