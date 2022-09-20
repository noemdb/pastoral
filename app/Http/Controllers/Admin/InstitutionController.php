<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.institutions.index'); //views/admin/institutions/index.blade.php
    }
}
