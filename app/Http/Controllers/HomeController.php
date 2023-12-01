<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user_temp.home');
    }

    public function contact()
    {
        return view('user_temp.contact');
    }

    public function blog()
    {
        return view('user_temp.blog');
    }

    public function about()
    {
        return view('user_temp.about');
    }
}
