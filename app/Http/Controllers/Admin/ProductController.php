<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::orderBy('id', 'DESC')->get();

        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributes = Attribute::pluck('title', 'id')->all();
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.product.create', compact('attributes', 'categories'));
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
        $attributes = Attribute::pluck('title', 'id')->all();
        $selectedAttributes = Attribute::whereIn('id', $data->attribute_ids)->pluck('id')->all();
        $categories = Category::pluck('title', 'id')->all();
        //dd($attributes, $selectedAttributes);
        return view('admin.product.edit', compact('data', 'attributes', 'categories', 'selectedAttributes'));
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
        //dd($request->all());
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
