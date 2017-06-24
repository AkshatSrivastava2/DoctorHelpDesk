<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

class PatientController extends Controller
{
    //
	public function store(Patient $patient)
	{
    	$this->validate(request(),[
    		'name'=>'required|min:6',
    		'age'=>'required',
    		'phone'=>'required'

    	]);

    	return back();
	}	
}