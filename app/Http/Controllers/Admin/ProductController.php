<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\Attribute;
use App\ProductLengthType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::orderBy('id', 'DESC')->paginate(30);

        return view('admin.product.index', compact('data'));
		}
		
		public function search(Request $request)
    {
        $data = Product::where('title', 'like', '%' . $request->title . '%')->paginate(30);

        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $attributesData = Attribute::with('filter')->get();
        $attributes = [];
        foreach ($attributesData as $key => $value) {
            $attributes[$key] = $value->id;
            $attributes[$key] =  $value->filter->title . ': ' .$value->title;
        }
        $categories = Category::pluck('title', 'id')->all();
        $products = Product::pluck('title', 'id')->all();
        $products_length_types = ProductLengthType::pluck('title', 'id')->all();
        return view('admin.product.create', compact('attributes', 'categories', 'products', 'products_length_types'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image',
        ]);

        $data = Product::add($request->all());
        $data->uploadImage($request->file('image'));
        $data->uploadMultipleImages($request->file('images'));
        $data->uploadTwoImages($request->file('two_images'));
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $data = Product::find($id);
        
        $attributesData = Attribute::with('filter')->get();
        $attributes = [];
        foreach ($attributesData as $key => $value) {
            $attributes[$key] = $value->id;
            $attributes[$key] =  $value->filter->title . ': ' .$value->title;
        }
       
        if($data->attribute_ids != null) {
            $selectedAttributes = Attribute::whereIn('id', $data->attribute_ids)->pluck('id')->all();
        }else {
            $selectedAttributes = [];
        }

        $categories = Category::pluck('title', 'id')->all();
        $products = Product::pluck('title', 'id')->all();
        if($data->collection_product_ids != null) {
            $selectedProducts = Product::whereIn('id', $data->collection_product_ids)->pluck('id')->all();
        }else {
            $selectedProducts = [];
				}
				
				if($data->mattress_product_ids != null) {
					$selectedMattressProducts = Product::whereIn('id', $data->mattress_product_ids)->pluck('id')->all();
				}else {
					$selectedMattressProducts = [];
				}

        $products_length_types = ProductLengthType::pluck('title', 'id')->all();
        //dd($attributes, $selectedAttributes);
        return view('admin.product.edit', compact('data', 'attributes', 'categories', 'selectedAttributes', 'products', 'selectedProducts', 'selectedMattressProducts', 'products_length_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image'
        ]);

        $data = Product::find($id);
        $data->edit($request->all());
        $data->uploadImage($request->file('image'));
        $data->uploadMultipleImages($request->file('images'));
        $data->uploadTwoImages($request->file('two_images'));
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->remove();

        return redirect()->route('product.index');
    }
}
