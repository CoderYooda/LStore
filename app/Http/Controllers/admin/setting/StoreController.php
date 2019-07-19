<?php

namespace App\Http\Controllers\admin\setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Settings\Store;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('admin.setting.store.index', compact('stores'));
    }

    public function add()
    {
        return view('admin.setting.store.form');
    }

    public function edit($id)
    {
        $store = Store::whereId($id)->first();

        return view('admin.setting.store.form', compact('store'));
    }
}
