<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Patient;

use App\Doctor;

class History extends Model
{
    //
    protected $fillable=['history','fees_paid','patient_id','doctor_id'];
    
    public function patient()
    {
    	return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
    	return $this->belongsTo(Doctor::class);
    }
}

