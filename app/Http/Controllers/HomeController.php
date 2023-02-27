<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homePage()
    {
        return view('home');
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function servicePage()
    {
        return view('services');
    }

    public function areaPage()
    {
        return view('areasOfPractice');
    }
}
