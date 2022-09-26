<?php

namespace App\Http\Controllers\Admin\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PescolarController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.pescolars.index'); //views/admin/institutions/index.blade.php
    }
}
