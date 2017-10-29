<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::all();

        return view('/blogs', compact('blogs'));
    }
}
