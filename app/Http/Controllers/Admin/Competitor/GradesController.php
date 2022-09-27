<?php

namespace App\Http\Controllers\Admin\Competitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.competitors.grades.index'); //views/admin/institutions/index.blade.php
    }
}
