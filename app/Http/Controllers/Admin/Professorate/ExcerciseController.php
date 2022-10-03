<?php

namespace App\Http\Controllers\Admin\Professorate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExcerciseController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.professorate.excercises.index'); 
    }
}
