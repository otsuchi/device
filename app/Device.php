<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $guarded = array('id');
    public $timestamps = false;

    public static $rules = array(
        // 'device_id' => 'required',
        'name' => 'required',
      
      
    );
}
