<?php

namespace App\Http\Controllers\Admin\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.courses.index');
    }
}
