<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class AddBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('su');
    }

    public function index()
    {
        return view('addblogentry');
    }
}
