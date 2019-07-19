<?php

use Illuminate\Database\Seeder;
use App\Model\System\Company;

class SeedCompany extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Компания 1',
        ]);
    }
}
