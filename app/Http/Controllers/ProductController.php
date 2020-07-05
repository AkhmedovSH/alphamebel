<?php

namespace App\Http\Controllers;

use App\Filter;
use App\Product;
use App\Category;
use App\Attribute;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $products = Product::where('category_id', $category->id)->get();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->get();
        $attributes = Attribute::whereIn('id', json_decode($category->attribute_ids))->get();
        
        return view('collections/beds/beds', compact('products', 'filters', 'category', 'attributes'));
    }

    public function singleProduct($category_id, $product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $category = Category::where('id', $category_id)->first();
        $attributes = Attribute::whereIn('id', $product->attribute_ids)->with('filter')->get();
        $images = $this->parseImages($product->images);
        $similarProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(8)->get();
        return view('collections/beds/raminibosco', compact('product', 'attributes', 'category', 'images', 'similarProducts'));
    }

    public function offices()
    {
        return view('collections/offices/offices');
    }

    public function kitchens()
    {
        return view('collections/kitchens');
    }

    public function sofas($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        $attributes = Attribute::whereIn('id', json_decode($category->attribute_ids))->get();

        return view('goods/sofa/sofas', compact('products', 'filters', 'category', 'attributes'));
    }

    public function wcb($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        $attributes = Attribute::whereIn('id', json_decode($category->attribute_ids))->get();

        return view('goods/wcb', compact('products', 'filters', 'category', 'attributes'));
    }

    public function singleRightProduct($category_id, $product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $category = Category::where('id', $category_id)->first();
        return view('goods/singleRightProduct', compact('product', 'category'));
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
