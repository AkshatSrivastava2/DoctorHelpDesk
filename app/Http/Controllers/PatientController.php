<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

class PatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function store(Request $request)
	{
    	$this->validate(request(),[
    		'name'=>'required|min:6',
    		'age'=>'required',
    		'phone'=>'required',
            'gender'=>'required'

    	]);
    	Patient::create([
    		'name'=>request('name'),
    		'age'=>request('age'),
    		'phone'=>request('phone'),
            'gender'=>request('gender')
    	]);

    	return back();
	}

    public function show()
    {
        $patients=Patient::all();

        return view('patients.show',compact('patients'));
    }	
}