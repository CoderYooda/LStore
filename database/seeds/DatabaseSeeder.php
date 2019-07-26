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
        $this->call(SeedCompany::class);
        $this->call(SeedAdministrator::class);
        $this->call(SeedCategories::class);
        $this->call(SeedStores::class);
    }
}
