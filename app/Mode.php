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
    public function companies()
    {
        return $this->belongsTo('App\Company', 'company_id');
    }
    
    public function devices()
    {
        return $this->belongsTo('App\Device', 'device_id');
    }
    
    public function divisions()
    {
        return $this->belongsTo('App\Division', 'division_id');
    }
}
