<?php

namespace App\Http\Controllers;

use App\Post;
use App\Filter;
use App\Slider;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->take(5)->get();
        $posts = Post::orderBy('id', 'desc')->take(9)->get();
        return view('index', compact('sliders', 'posts'));
    }

    public function stocks()
    {
        $posts = Post::all();
        return view('stocks/stocks', compact('posts'));
    }

    public function stock_inner($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('stocks/stock_inner', compact('post'));
    }

    public function search(Request $request)
    {
        $data = Product::where('title', 'like', '%' . $request->text . '%')->get();
        return view('search', compact('data'));
    }

    public function test()
    {
       $products = Product::where('category_id', 10)->get();
       
       $test = [1, 2, 3, 4, 5, 6];
       $array = json_decode($products[0]['filter_ids'], true);
       //dd($array);

       $filters = Filter::whereIn('id', $array)->with('attributes')->get();
    }
}
