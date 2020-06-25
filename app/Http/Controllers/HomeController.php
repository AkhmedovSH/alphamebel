<?php

namespace App\Http\Controllers;

use App\Post;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->take(5)->get();
        $posts = Post::orderBy('id', 'desc')->take(9)->get();
        return view('index', compact('sliders', 'posts'));
    }

    public function stock_inner($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('stocks/stock_inner', compact('post'));
    }
}
