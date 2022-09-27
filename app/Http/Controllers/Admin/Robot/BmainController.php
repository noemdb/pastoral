<?php

namespace App\Http\Controllers\Admin\Robot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BmainController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.robots.bmains.index'); 
    }
}
