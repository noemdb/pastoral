<?php

namespace App\Http\Controllers\Admin\Professorate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.professorate.lessons.index'); 
    }
}
