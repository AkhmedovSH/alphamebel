<?php

namespace App\Http\Controllers\Admin;

use App\Credit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreditController extends Controller
{
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'credit' => 'required',
            'month' => 'required'
        ]);

        $data = Credit::find($id);
        $data->edit($request->all());
        return redirect()->route('dashboard');
    }
}
