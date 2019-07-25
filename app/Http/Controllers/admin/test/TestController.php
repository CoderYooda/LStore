<?php

namespace App\Http\Controllers\admin\test;

use App\Http\Controllers\Providers\TrinityParts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test()
    {
        $tp = new TrinityParts('B61A560ED1B918340A0DDD00E08C990E');

        $items = $tp->searchItems('ATR-S-5', 'airline', $searchType = 'full', $asArray = true);


        $brands = $tp->searchBrands('1', $online = true, $asArray = true);

        dd($brands);

        foreach($items['data'] as $item){
            echo $item['caption'];
            echo '<br>';

            echo $item['price'];
            echo '<br>';
        }

        dd($tp->error);
    }
}
