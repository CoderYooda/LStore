<?php

namespace App\Http\Controllers\admin\setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function showSettingPage(){
        return view('admin.setting.main');
    }
}
