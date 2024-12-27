<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    function index()
    {
        return view('front.page.homepage');
    }

    function about()
    {
        return view('front.page.about');
    }

    function contact()
    {
        return view('front.page.contact');
    }
}
