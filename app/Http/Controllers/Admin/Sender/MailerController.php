<?php

namespace App\Http\Controllers\Admin\Sender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailerController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.senders.mailers.index'); 
    }
}
