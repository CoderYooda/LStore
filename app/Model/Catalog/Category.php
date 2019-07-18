<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;
use stdClass;

class Category extends Model
{
    protected $table = 'category';

    public function description()
    {
        return $this->hasOne('App\Model\Catalog\CategoryDescription', 'category_id');
    }

    #создания списка категорий для селектора
    public static function asList()
    {
        $categories = Category::all();

        $sort_order = array();

        foreach ($categories as $key => $value) {
            $sort_order[$value->category_id][$value->id]['id'] = $value->id;
            $sort_order[$value->category_id][$value->id]['name'] = $value->description()->first()->name;
            $sort_order[$value->category_id][$value->id]['category_id'] = $value->category_id;
        }

        $tree_categories = self::getAllCategories($sort_order);

        $cat_collection = collect();

        foreach($tree_categories as $category){
            $cat = new stdClass();
            $cat->id = $category['id'];
            $cat->name = $category['name'];
            $cat->category_id = $category['category_id'];
            $cat_collection->push($cat);
        }

        return $cat_collection;
    }

    #Рекурсивная генерация дерева категорий
    private static function getAllCategories($categories, $parent_id = 0, $parent_name = '') {
        $output = array();
        if (array_key_exists($parent_id, $categories)) {

            if ($parent_name != '') {
                $parent_name .= ' > ';
            }

            foreach ($categories[$parent_id] as $category) {
                $output[$category['id']] = array(
                    'id' => $category['id'],
                    'category_id' => $category['category_id'],
                    'name'        => $parent_name . $category['name']
                );
                $output += self::getAllCategories($categories, $category['id'], $parent_name . $category['name']);
            }
        }
        return $output;
    }

}
