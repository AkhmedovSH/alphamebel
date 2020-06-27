<?php

namespace App\Http\Controllers\Admin;

use App\Filter;
use App\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function index(){
        $data = Attribute::with('filter')->get();
        return view('admin.attribute.index', compact('data'));
    }

    public function create(){
        $filters = Filter::pluck('title', 'id')->all();
        return view('admin.attribute.create', compact('filters'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
        ]);
        Attribute::create($request->all());
        return redirect()->back();
        //return redirect()->route('attribute.index');
    }

    public function edit($id){
        $data = Attribute::find($id);
        $filters = Filter::pluck('title', 'id')->all();
        return view('admin.attribute.edit', compact('data', 'filters'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'title' => 'required',
        ]);
        $data = Attribute::find($id);
        $data->update($request->all());
        return redirect()->route('attribute.index');
    }

    public function destroy($id){
        Attribute::find($id)->delete();
        return redirect()->route('attribute.index');
    }
}
