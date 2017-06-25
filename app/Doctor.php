<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Patient;

class Doctor extends Model
{
    //
    protected $fillable=['name','qualification','phone','gender'];
    
    public function patient()
    {
    	return $this->belongsTo(Patient::class);
    }
}
