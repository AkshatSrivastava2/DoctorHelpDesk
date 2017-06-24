<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Doctor extends Model
{
    //
    protected $fillable=['name','qualification','phone','gender'];
    
    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }
}
