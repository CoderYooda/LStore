<?php

namespace App\Http\Controllers\admin\catalog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catalog\Category;

class CategoryController extends Controller
{
    # Форма редактирования категории
    public function getFormModal()
    {
        return response()->json(
            [
                'status' => 'success',
                'reason' => '',
                'html' => view('admin.catalog.category.form_modal')->render()
            ], 200);
    }

}
