<?php

namespace App\Model\Settings;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';

    public function toCompany(){
        return $this->belongsTo('App\Model\System\Company', 'company_id');
    }
}
