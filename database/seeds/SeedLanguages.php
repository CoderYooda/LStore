<?php

use Illuminate\Database\Seeder;
use App\Model\Localisation\Language;

class SeedLanguages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name' => 'Русский',
            'code' => 'ru',
            'locale' => 'ru-RU',
            'image_id' => 0,
            'directory' => '/root',
            'sort_order' => true,
            'status' => true
        ]);

        Language::create([
            'name' => 'English',
            'code' => 'en',
            'locale' => 'en-GB',
            'image_id' => 0,
            'directory' => '/root',
            'sort_order' => true,
            'status' => true
        ]);
    }
}
