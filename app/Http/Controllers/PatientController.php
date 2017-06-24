<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

class PatientController extends Controller
{

	public function store(Request $request)
	{
    	$this->validate(request(),[
    		'name'=>'required|min:6',
    		'age'=>'required',
    		'phone'=>'required'

    	]);
    	Patient::create([
    		'name'=>request('name'),
    		'age'=>request('age'),
    		'phone'=>request('phone')
    	]);

    	return back();
	}	
}