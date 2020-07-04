<?php

namespace App\Http\Controllers\Admin;

use App\Credit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Credit::where('id', 1)->first();
        return view('admin.dashboard', compact('data'));
    }
}
