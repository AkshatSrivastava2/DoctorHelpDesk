<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Patient;

class History extends Model
{
    //
    protected $fillable=['history','fees_paid','patient_id'];
    
    public function patient()
    {
    	return $this->belongsTo(Patient::class);
    }

}

