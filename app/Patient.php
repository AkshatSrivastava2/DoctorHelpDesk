<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    public function doctor()
    {
    	return $this->hasMany('App\Doctor');
    }
}
