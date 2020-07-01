<?php

namespace App\Http\Controllers;

use App\Filter;
use App\Product;
use App\Category;
use App\Attribute;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function beds($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        return view('collections/beds/beds', compact('products', 'filters', 'category'));
    }

    public function singleBed($category_id, $product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $category = Category::where('id', $category_id)->first();
        $attributes = Attribute::whereIn('id', $product->attribute_ids)->with('filter')->get();
        $images = $this->parseImages($product->images);
        //dd($images[0]->image);
        return view('collections/beds/raminibosco', compact('product', 'attributes', 'category', 'images'));
    }

    public function livingRooms($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        return view('collections/beds/beds', compact('products', 'filters', 'category'));
    }

    public function nursery($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        return view('collections/beds/beds', compact('products', 'filters', 'category'));
    }

    public function halls($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        return view('collections/beds/beds', compact('products', 'filters', 'category'));
    }

    public function offices()
    {
        return view('collections/offices/offices');
    }

    public function officesCollection($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();

        return view('collections/beds/beds', compact('products', 'filters', 'category'));
    }

    public function kitchens()
    {
        return view('collections/kitchens/kitchens');
    }

    public function sofas($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();

        return view('goods/sofa/sofas', compact('products', 'filters', 'category'));
    }

    

    public function parseImages($product_images){
        if($product_images != null) {
            $images = json_decode($product_images);
             return $images;
        } else {
            return $images = [];
        }
    }
}
