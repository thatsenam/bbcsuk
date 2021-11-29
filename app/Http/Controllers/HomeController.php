<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        return view('home');
    }

    public function donate_now()
    {
        return view('donate_now');
    }

    public function donate_now_store()
    {
        return view('home');
    }
}
