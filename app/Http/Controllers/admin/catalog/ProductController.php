<?php

namespace App\Http\Controllers\admin\catalog;

use App\Model\Localisation\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    # Список редактируемых товаров
    public function getList()
    {
        return view('admin.catalog.product_list');
    }

    # Форма редактирования товара
    public function getForm()
    {
        $languages = Language::all();

        return view('admin.catalog.product_form', compact('languages'));
    }

    # Сохранить форму с товаром в базу
    public function store(Request $request)
    {
        dd($request);
    }
}
