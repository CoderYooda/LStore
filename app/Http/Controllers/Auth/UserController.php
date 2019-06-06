<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    public static function asideUserHead()
    {
        $user = Auth::user();

        return view('admin.support.auth.aside_user_head', compact('user'));
    }
}
