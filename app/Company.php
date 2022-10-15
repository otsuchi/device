<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = array('id');
    public $timestamps = false;
    
    public static $rules = array(
        // 'company_id' => 'required',
        'name' => 'required',
    );
}
