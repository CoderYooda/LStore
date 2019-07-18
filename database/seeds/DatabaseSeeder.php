<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedManufacturers::class);
        $this->call(SeedAdministrator::class);
        $this->call(SeedLanguages::class);
        $this->call(SeedCategories::class);
    }
}
