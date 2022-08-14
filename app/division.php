<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    //
     protected $guarded = array('division_id');

    public static $rules = array(
        'division_id' => 'required',
        'name' => 'required',
  
    );
}
