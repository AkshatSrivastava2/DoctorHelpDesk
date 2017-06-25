<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Doctor;

use App\History;

class Patient extends Model
{
    protected $fillable=['name','age','phone','gender'];
    
    public function doctor()
    {
    	return $this->hasMany(Doctor::class);
    }
    
    public function history()
    {
    	return $this->hasMany(History::class);
    }

    public function addHistory($history,$fees_paid)
    {
        $this->history()->create(compact('history','fees_paid'));
    }
}

