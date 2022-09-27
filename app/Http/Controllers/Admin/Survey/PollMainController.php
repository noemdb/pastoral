<?php

namespace App\Http\Controllers\Admin\Survey;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PollMainController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.surveys.pollmains.index'); 
    }
}
