<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function detail($slug)
    {
        $data = Post::where('status', 'publish')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('front.page.detail', [
            'data' => $data
        ]);
    }
}
