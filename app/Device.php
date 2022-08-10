<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
     protected $guarded = array('device_id');

    public static $rules = array(
        'device_id' => 'required',
      
    );
}
