<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Division extends Model
{
    //
    protected $guarded = array('division_id');
    public $timestamps = false;
    
    public static $rules = array(
        'division_id' => 'required',
        'name' => 'required',
  
    );
}
