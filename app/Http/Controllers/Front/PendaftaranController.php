<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    function create()
    {
        return view('front.pendaftaran.create');
    }
}
