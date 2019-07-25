<?php

namespace App\Http\Controllers\admin\catalog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catalog\Supplier;

class SupplierController extends Controller
{
    # Форма списка производителей в модальном окне
    public function getListModal()
    {
        $suppliers = Supplier::paginate(2);

        return response()->json(
            [
                'status' => 'success',
                'reason' => '',
                'html' => view('admin.catalog.supplier.list_modal', compact('suppliers'))->render()
            ], 200);
    }
}
