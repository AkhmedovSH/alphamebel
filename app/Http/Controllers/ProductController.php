<?php

namespace App\Http\Controllers;

use App\Filter;
use App\Product;
use App\Category;
use App\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
	
    public function findCollection($product_id)
    {
			$category = Category::where('id', 10)->first();
			$products = Product::where('category_id', $category->id)->orderBy('position', 'DESC')->get();

			$finded = false;
			$collection;

			foreach ($products as $key => $value) {
				if(in_array($product_id, $products[$key]['collection_product_ids'])) {
					$finded = true;
					$collection = $value;
					break;
				} else {
					$finded = false;
				}
			}
			
			try {
				if($finded) {
					return redirect()->route('singleProductLeft', ['category_id' => $collection->category_id, 'product_id' => $collection->id]);
				} else {
					$product =  Product::where('id', $product_id)->first();
					return redirect(Session::get('show_all_url'));
				}
			} catch (\Throwable $th) {
				return redirect()->back();
			}
		}
		
		public function products($category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $products = Product::where('category_id', $category->id)->orderBy('position', 'DESC')->get();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->get();
        $attributes = Attribute::whereIn('id', json_decode($category->attribute_ids))->get();
        
        return view('collections/singleProduct/beds', compact('products', 'filters', 'category', 'attributes'));
    }

    public function singleProductLeft($category_id, $product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $category = Category::where('id', $category_id)->first();
        if($product->attribute_ids == null) {
            $product->attribute_ids = [];
        }
        $attributes = Attribute::whereIn('id', $product->attribute_ids)->with('filter')->get();
        $images = $this->parseImages($product->images);
        if($product->collection_product_ids != null) {
            $similarProducts = Product::whereIn('id', $product->collection_product_ids)->paginate(8);
        }else {
            $similarProducts = [];
        }
        //$similarProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(8)->get();
        //dd($similarProducts);
        return view('collections/singleProduct/singleProductLeft', compact('product', 'attributes', 'category', 'images', 'similarProducts'));
    }

    public function singleProductRight($category_id, $product_id)
    {
        $product = Product::where('id', $product_id)->first();

        $category = Category::where('id', $category_id)->first();
        if($product->attribute_ids == null) {
            $product->attribute_ids = [];
        }
        $attributes = Attribute::whereIn('id', $product->attribute_ids)->with('filter')->get();
        $images = $this->parseImages($product->images);
        $similarProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(8)->get();

        $haveCollection = false;
        if($product->collection_product_ids != null && $product->collection_product_ids[0] != null){
            $collectionItem = Product::where('id', $product->collection_product_ids[0])->first();
            $haveCollection = true;
        } else {
            $collectionItem = Product::where('category_id', $category_id)->get()->random(1)->first();
        }

        return view('collections/singleProduct/singleProductRight', compact('product', 'attributes', 'category', 'images', 'similarProducts', 'collectionItem', 'haveCollection'));
    }

    public function offices()
    {
        return view('collections/offices/offices');
    }

    public function kitchens()
    {
        return view('collections/kitchens');
    }

    public function sofas($category_id, Request $request) //sofas
    {
				Session::put('show_all_url', $request->url());
        $category = Category::where('id', 26)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        $attributes = Attribute::whereIn('id', json_decode($category->attribute_ids))->get();
       
        $category2 = Category::where('id', 27)->first();
        $filters2 = Filter::whereIn('id', json_decode($category2->filter_ids))->with('attributes')->get();
        $products2 = Product::where('category_id', $category2->id)->get();
        $attributes2 = Attribute::whereIn('id', json_decode($category2->attribute_ids))->get();
        
        $category3 = Category::where('id', 28)->first();
        $filters3 = Filter::whereIn('id', json_decode($category3->filter_ids))->with('attributes')->get();
        $products3 = Product::where('category_id', $category3->id)->get();
        $attributes3 = Attribute::whereIn('id', json_decode($category3->attribute_ids))->get();

        $category4 = Category::where('id', 29)->first();
        $filters4 = Filter::whereIn('id', json_decode($category4->filter_ids))->with('attributes')->get();
        $products4 = Product::where('category_id', $category4->id)->get();
        $attributes4 = Attribute::whereIn('id', json_decode($category4->attribute_ids))->get();

        return view('goods/sofas', compact(
            'products', 'filters', 'category', 'attributes',
            'products2', 'filters2', 'category2', 'attributes2',
            'products3', 'filters3', 'category3', 'attributes3',
            'products4', 'filters4', 'category4', 'attributes4',
        ));
    }

    public function wardobesBedsComods($category_id, Request $request) //wardobes
    {
        
        Session::put('show_all_url', $request->url());
        $category = Category::where('id', $category_id)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        $attributes = Attribute::whereIn('id', json_decode($category->attribute_ids))->get();
        return view('goods/wardobesBedsComods', compact('products', 'filters', 'category', 'attributes'));
    }


    public function chairs($category_id, Request $request) //chairs
    {
				Session::put('show_all_url', $request->url());
        $category = Category::where('id', 30)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->get();
        $attributes = Attribute::whereIn('id', json_decode($category->attribute_ids))->get();

        $category2 = Category::where('id', 31)->first();
        $filters2 = Filter::whereIn('id', json_decode($category2->filter_ids))->with('attributes')->get();
        $products2 = Product::where('category_id', $category2->id)->get();
        $attributes2 = Attribute::whereIn('id', json_decode($category2->attribute_ids))->get();

        return view('goods/chairs', compact(
            'products', 'filters', 'category', 'attributes',
            'products2', 'filters2', 'category2', 'attributes2'
        ));
    }

    public function mattress($category_id, Request $request) //mattress
    {
        Session::put('show_all_url', $request->url());
        $category = Category::where('id', 21)->first();
        $filters = Filter::whereIn('id', json_decode($category->filter_ids))->with('attributes')->get();
        $products = Product::where('category_id', $category->id)->where('collection_product_ids', '!=', null)->where('is_hidden', 0)->get();
        $attributes = Attribute::whereIn('id', json_decode($category->attribute_ids))->get();
       
        $category2 = Category::where('id', 32)->first();
        $filters2 = Filter::whereIn('id', json_decode($category2->filter_ids))->with('attributes')->get();
        $products2 = Product::where('category_id', $category2->id)->get();
        $attributes2 = Attribute::whereIn('id', json_decode($category2->attribute_ids))->get();
        
        $category3 = Category::where('id', 33)->first();
        $filters3 = Filter::whereIn('id', json_decode($category3->filter_ids))->with('attributes')->get();
        $products3 = Product::where('category_id', $category3->id)->get();
        $attributes3 = Attribute::whereIn('id', json_decode($category3->attribute_ids))->get();

        $category4 = Category::where('id', 34)->first();
        $filters4 = Filter::whereIn('id', json_decode($category4->filter_ids))->with('attributes')->get();
        $products4 = Product::where('category_id', $category4->id)->get();
        $attributes4 = Attribute::whereIn('id', json_decode($category4->attribute_ids))->get();

        $category5 = Category::where('id', 35)->first();
        $filters5 = Filter::whereIn('id', json_decode($category5->filter_ids))->with('attributes')->get();
        $products5 = Product::where('category_id', $category5->id)->get();
        $attributes5 = Attribute::whereIn('id', json_decode($category5->attribute_ids))->get();

        return view('goods/mattress', compact(
            'products', 'filters', 'category', 'attributes',
            'products2', 'filters2', 'category2', 'attributes2',
            'products3', 'filters3', 'category3', 'attributes3',
            'products4', 'filters4', 'category4', 'attributes4',
            'products5', 'filters5', 'category5', 'attributes5',
        ));
    }

    public function singleProductAnotherType($category_id, $product_id) {
        $product = Product::where('id', $product_id)->first();
        $category = Category::where('id', $category_id)->first();
        if($product->attribute_ids == null) {
            $product->attribute_ids = [];
        }
        $attributes = Attribute::whereIn('id', $product->attribute_ids)->with('filter')->get();
        $images = $this->parseImages($product->images);
        $similarProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(8)->get();

        $collectionItem = Product::where('category_id', 10)->get()->random(1)->first();

        if($product->collection_product_ids != null) {
            $sames = Product::whereIn('id', $product->collection_product_ids)->where('is_hidden', 0)->get();
            $samesNoStandart = Product::whereIn('id', $product->collection_product_ids)->where('is_hidden', 1)->get();
        }else {
            $sames = [];
            $samesNoStandart = [];
				}
        return view('collections/singleProductAnotherType', compact('product', 'attributes', 'category', 'images', 'similarProducts', 'collectionItem', 'sames', 'samesNoStandart'));
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
