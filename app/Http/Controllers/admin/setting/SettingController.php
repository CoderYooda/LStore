<?php

namespace App\Http\Controllers\admin\setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    private $template = 'admin.setting.store';

    public function showSettingPage(){
        return view('admin.setting.main');
    }
}
