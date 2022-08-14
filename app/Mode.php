<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'company_id' => 'required',
        'device_id' => 'required',
        'type' => 'required',
        'division_id' => 'required',
        'title' => 'required',
        'body' => 'required',
    );
}
