<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPendaftaranController extends Controller
{
    function index()
    {
        return view('front.landing.pendaftaran');
    }
}
