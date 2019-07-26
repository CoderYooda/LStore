<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function description()
    {
        return $this->hasOne('App\Model\Catalog\ProductDescription', 'product_id');
    }
}
