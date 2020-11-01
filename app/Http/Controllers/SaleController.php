<?php

namespace App\Http\Controllers;

use App\Filter;
use App\Product;
use App\Category;
use App\Attribute;
use Illuminate\Http\Request;

class SaleController extends Controller
{
	public function sofas($category_id)
	{
		$category = Category::where('id', 26)->first();
		$products = Product::where('category_id', $category->id)->where('sale_out', 1)->get();
		
		$category2 = Category::where('id', 27)->first();
		$products2 = Product::where('category_id', $category2->id)->where('sale_out', 1)->get();
		
		$category3 = Category::where('id', 28)->first();
		$products3 = Product::where('category_id', $category3->id)->where('sale_out', 1)->get();

		$category4 = Category::where('id', 29)->first();
		$products4 = Product::where('category_id', $category4->id)->where('sale_out', 1)->get();
	
		return view('sales.sofas', compact('products', 'products2', 'products3', 'products4'));
	}

	public function wardobesBedsComods($category_id) //wardobes
	{
		$category = Category::where('id', $category_id)->first();
		$products = Product::where('category_id', $category->id)->where('sale_out', 1)->get();
		return view('sales.wardobes', compact('products'));
	}

	public function chairs($category_id) //chairs
	{
			$category = Category::where('id', 30)->first();
			$products = Product::where('category_id', $category->id)->where('sale_out', 1)->get();

			$category2 = Category::where('id', 31)->first();
			$products2 = Product::where('category_id', $category2->id)->where('sale_out', 1)->get();

			return view('sales.chairs', compact('products','products2'));
	}

	public function mattress($category_id) //mattress
	{
			$category = Category::where('id', 21)->first();
			$products = Product::where('category_id', $category->id)->where('collection_product_ids', '!=', null)->where('sale_out', 1)->get();
		 
			$category2 = Category::where('id', 32)->first();
			$products2 = Product::where('category_id', $category2->id)->where('sale_out', 1)->get();
			
			$category3 = Category::where('id', 33)->first();
			$products3 = Product::where('category_id', $category3->id)->where('sale_out', 1)->get();

			$category4 = Category::where('id', 34)->first();
			$products4 = Product::where('category_id', $category4->id)->where('sale_out', 1)->get();

			$category5 = Category::where('id', 35)->first();
			$products5 = Product::where('category_id', $category5->id)->where('sale_out', 1)->get();

			return view('sales.mattress', compact(
					'products',
					'products2',
					'products3',
					'products4',
					'products5',
			));
	}
}
