<?php

namespace App\Http\Controllers\admin\common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('admin.common.dashboard');
    }
}
