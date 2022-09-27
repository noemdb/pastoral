<?php

namespace App\Http\Controllers\Admin\Professorate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.professorate.teachers.index'); //views/admin/institutions/index.blade.php
    }
}
