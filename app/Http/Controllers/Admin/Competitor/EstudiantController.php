<?php

namespace App\Http\Controllers\Admin\Competitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudiantController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.competitors.estudiants.index'); //views/admin/institutions/index.blade.php
    }
}
