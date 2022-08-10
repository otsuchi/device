<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = array('company_id');

    public static $rules = array(
        'company_id' => 'required',
       
    );
}
