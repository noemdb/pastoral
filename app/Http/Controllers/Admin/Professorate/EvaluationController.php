<?php

namespace App\Http\Controllers\Admin\Professorate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.professorate.evaluations.index'); 
    }
}
