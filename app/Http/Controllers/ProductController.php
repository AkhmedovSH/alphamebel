<?php

namespace App\Http\Controllers;

use App\Filter;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function beds()
    {
        $category = Category::where('id', 10)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();

        return view('collections/beds/beds', compact('products', 'filters', 'category'));
    }
}
