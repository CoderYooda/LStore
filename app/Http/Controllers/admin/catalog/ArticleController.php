<?php

namespace App\Http\Controllers\admin\catalog;

use App\Http\Controllers\Providers\TrinityParts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function search(Request $request)
    {

        $tp = new TrinityParts('B61A560ED1B918340A0DDD00E08C990E');

        if(!$request->ajax()){
            return view('admin.catalog.article.search');
        }

        $brands = $tp->searchBrands($request['search'], $online = true, $asArray = true);




        dd($tp->searchItems($request['search'], 'GMB', $searchType = 'prices', $asArray = true));

        foreach ($brands['data'] as $key => $brand){
            $brands['data'][$key]['item'] = $tp->searchItems($request['search'], $brand['producer'], $searchType = 'full', $asArray = true);
        }

        dd($brands);

        return view('admin.catalog.article.search', compact('brands'));
    }
}
