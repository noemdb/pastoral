<?php

namespace App\Http\Controllers\Admin\Competitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.competitors.withdrawals.index'); //views/admin/institutions/index.blade.php
    }
}
