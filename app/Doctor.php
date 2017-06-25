<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Patient;

use App\User;

class Doctor extends Model
{
    //
    protected $fillable=['name','qualification','phone','gender','user_id'];
    
    public function patient()
    {
    	return $this->belongsTo(Patient::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
