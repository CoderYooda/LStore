<?php

use Illuminate\Database\Seeder;
use App\Model\Settings\Store;

class SeedStores extends Seeder
{
    public function run()
    {
        Store::create([
            'name' => 'Магазин1',
            'url' => 'http://lstore/',
            'company_id' => 1
        ]);
    }
}
