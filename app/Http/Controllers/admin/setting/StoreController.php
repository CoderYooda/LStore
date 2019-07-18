<?php

namespace App\Http\Controllers\admin\setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {
        
        return view('admin.setting.store.index');
    }

    public function getForm()
    {
        return view('admin.setting.store.form');
    }
}
