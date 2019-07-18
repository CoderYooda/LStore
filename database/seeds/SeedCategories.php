<?php

use Illuminate\Database\Seeder;
use App\Model\Catalog\Category;
use App\Model\Catalog\CategoryDescription;

class SeedCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed_category = Category::create([
            'image' => 0,
            'category_id' => 0,
            'top' => 1,
            'column' => 0,
            'sort_order' => 1,
            'status' => 1,
        ]);

        $seed_description = CategoryDescription::create([
            'category_id' => $seed_category->id,
            'language_id' => 1,
            'name' => 'Категория 1',
            'description' => 'Категория 1 описание',
            'meta_title' => 'Категория 1 тайтл',
            'meta_description' => 'Категория 1 мета описание',
            'meta_keyword' => 'Категория 1, Категория 1, Категория 1',
            'meta_h1' => 'Категория 1 h1',
        ]);

        $seed_category = Category::create([
            'image' => 0,
            'category_id' => 1,
            'top' => 0,
            'column' => 0,
            'sort_order' => 1,
            'status' => 1,
        ]);

        $seed_description = CategoryDescription::create([
            'category_id' => $seed_category->id,
            'language_id' => 1,
            'name' => 'Категория 2',
            'description' => 'Категория 2 описание',
            'meta_title' => 'Категория 2 тайтл',
            'meta_description' => 'Категория 2 мета описание',
            'meta_keyword' => 'Категория 2, Категория 2, Категория 2',
            'meta_h1' => 'Категория 2 h1',
        ]);

        $seed_category = Category::create([
            'image' => 0,
            'category_id' => 0,
            'top' => 1,
            'column' => 0,
            'sort_order' => 1,
            'status' => 1,
        ]);

        $seed_description = CategoryDescription::create([
            'category_id' => $seed_category->id,
            'language_id' => 1,
            'name' => 'Категория 3',
            'description' => 'Категория 3 описание',
            'meta_title' => 'Категория 3 тайтл',
            'meta_description' => 'Категория 3 мета описание',
            'meta_keyword' => 'Категория 3, Категория 3, Категория 3',
            'meta_h1' => 'Категория 3 h1',
        ]);

        $seed_category = Category::create([
            'image' => 0,
            'category_id' => 2,
            'top' => 0,
            'column' => 0,
            'sort_order' => 1,
            'status' => 1,
        ]);

        $seed_description = CategoryDescription::create([
            'category_id' => $seed_category->id,
            'language_id' => 1,
            'name' => 'Категория 4',
            'description' => 'Категория 4 описание',
            'meta_title' => 'Категория 4 тайтл',
            'meta_description' => 'Категория 4 мета описание',
            'meta_keyword' => 'Категория 2, Категория 4, Категория 4',
            'meta_h1' => 'Категория 4 h1',
        ]);

        $seed_category = Category::create([
            'image' => 0,
            'category_id' => 2,
            'top' => 0,
            'column' => 0,
            'sort_order' => 1,
            'status' => 1,
        ]);

        $seed_description = CategoryDescription::create([
            'category_id' => $seed_category->id,
            'language_id' => 1,
            'name' => 'Категория 5',
            'description' => 'Категория 5 описание',
            'meta_title' => 'Категория 5 тайтл',
            'meta_description' => 'Категория 5 мета описание',
            'meta_keyword' => 'Категория 5, Категория 5, Категория 5',
            'meta_h1' => 'Категория 5 h1',
        ]);
    }
}
