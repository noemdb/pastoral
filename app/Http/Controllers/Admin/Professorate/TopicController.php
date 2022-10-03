<?php

namespace App\Http\Controllers\Admin\Professorate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.professorate.topics.index'); 
    }
}
