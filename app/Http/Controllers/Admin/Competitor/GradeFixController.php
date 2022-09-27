<?php

namespace App\Http\Controllers\Admin\Competitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeFixController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.competitors.gradefixs.index'); //views/admin/institutions/index.blade.php
    }
}
