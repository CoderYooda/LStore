<?php

namespace App\Http\Controllers\admin\catalog;

use App\Model\Catalog\Category;
use App\Model\Catalog\Manufacturer;
use App\Model\Catalog\Supplier;
use App\Model\Localisation\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use stdClass;

class ProductController extends Controller
{
    # Список товаров
    public function index()
    {
        return view('admin.catalog.product.index');
    }

    # Форма редактирования товара
    public function getForm()
    {
        $parametrs = self::collectProductParams();
        return view('admin.catalog.product.form', compact('parametrs'));
    }

    # Форма редактирования товара
    public function getFormModal()
    {
        $parametrs = self::collectProductParams();
        return response()->json(['status' => 'success', 'reason' => 'Упс! Что то пошло не так!', 'html' => view('admin.catalog.product.form_modal', compact('parametrs'))->render()], 200);
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
        $collection->suppliers = Supplier::all();
        $collection->manufacturers = Manufacturer::all();
        $collection->categories = Category::with('description')->get();
        return $collection;
    }
}
