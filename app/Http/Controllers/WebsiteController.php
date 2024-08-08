<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.home');
    }
}
