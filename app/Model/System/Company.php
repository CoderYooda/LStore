<?php

namespace App\Model\System;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    public function stores(){
        return $this->hasMany('App\Model\Settings\Store', 'company_id');
    }
}
