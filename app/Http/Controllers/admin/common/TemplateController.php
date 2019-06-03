<?php

namespace App\Http\Controllers\admin\common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public static function getHeader()
    {
        return view('admin.template.header')->render();
    }

    public static function getAside()
    {
        return view('admin.template.aside')->render();
    }
}
