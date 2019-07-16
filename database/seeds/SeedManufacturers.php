<?php

use Illuminate\Database\Seeder;
use App\Model\Catalog\Manufacturer;

class SeedManufacturers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturers = [ 'Apple', 'Sony', 'Samsung', 'Cinema', 'Nikon', 'Intel', 'AMD', 'Kingston', 'Broadical Dynamix' ];

        foreach($manufacturers as $manufacturer){
            $seed_manufacturer = new Manufacturer();
            $seed_manufacturer->name = $manufacturer;
            $seed_manufacturer->save();
        }
    }
}
