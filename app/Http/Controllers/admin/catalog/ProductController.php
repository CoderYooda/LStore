<?php

namespace App\Http\Controllers\admin\catalog;

use App\Model\Catalog\Manufacturer;
use App\Model\Localisation\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use stdClass;

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
        $parametrs = self::collectProductParams();
        return view('admin.catalog.product_form', compact('parametrs'));
    }

    # Сохранить форму с товаром в базу
    public function store(Request $request)
    {
        dd($request);
    }

    #Сборка параметров необходимых для формы продукта
    private static function collectProductParams()
    {
        $collection = new stdClass();
        $collection->languages = Language::all();
        $collection->manufacturers = Manufacturer::all();

        return $collection;
    }
}
