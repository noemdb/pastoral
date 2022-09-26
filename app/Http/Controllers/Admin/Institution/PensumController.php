<?php

namespace App\Http\Controllers\Admin\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PensumController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.pensums.index'); //views/admin/institutions/index.blade.php
    }
}
