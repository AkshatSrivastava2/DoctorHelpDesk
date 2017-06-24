<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=['name','age','phone'];
    
    public function doctor()
    {
    	return $this->hasMany('App\Doctor');
    }
}
