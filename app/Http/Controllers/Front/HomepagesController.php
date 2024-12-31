<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    function index()
    {
        return redirect('/hal/selamat-datang');
    }
}
