<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::latest()->paginate(10);

        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|image'
        ]);

        $data = Product::add($request->all());
        $data->uploadImage($request->file('image'));
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $data = Product::find($id);
        return view('admin.product.edit', compact('data'));
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
            'image' => 'nullable|image'
        ]);

        $data = Product::find($id);
        $data->edit($request->all());
        $data->uploadImage($request->file('image'));
        return redirect()->route('posts.index');
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
