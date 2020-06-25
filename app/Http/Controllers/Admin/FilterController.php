<?php

namespace App\Http\Controllers\Admin;

use App\Filter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
    public function index(){
        $data = Filter::all();
        return view('admin.filter.index', compact('data'));
    }

    public function create(){
        return view('admin.filter.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
        ]);
        Filter::create($request->all());
        return redirect()->route('filter.index');
    }

    public function edit($id){
        $data = Filter::find($id);
        return view('admin.filter.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'title' => 'required',
        ]);
        $data = Filter::find($id);

        $data->update($request->all());

        return redirect()->route('filter.index');
    }

    public function destroy($id){
        Filter::find($id)->delete();
        return redirect()->route('filter.index');
    }
}
