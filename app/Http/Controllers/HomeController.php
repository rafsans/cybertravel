<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index',array('title'=>'Home'));
    }

    public function contactUs()
    {
        return view('pages.contactUs',array('title'=>'Contact Us'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
