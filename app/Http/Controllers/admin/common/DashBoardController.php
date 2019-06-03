<?php

namespace App\Http\Controllers\admin\common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function index(){

        $header = TemplateController::getHeader();

        $aside = TemplateController::getAside();

        return view('admin.common.dashboard', compact('header', 'aside'));
    }
}
