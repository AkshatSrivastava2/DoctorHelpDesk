<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

use Session;

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

        $existPatient=Patient::all()->where('phone',request('phone'))->first();

        if($existPatient)
        {
            Session::flash('flash_message', 'Phone Number already available!');
            
            return back(); 
        }
    	Patient::create([
    		'name'=>request('name'),
    		'age'=>request('age'),
    		'phone'=>request('phone'),
            'gender'=>request('gender')
    	]);

        Session::flash('flash_message', 'Details added successfully!');

    	return redirect('/patient/show');
	}

    public function show()
    {
        $patients=Patient::all();

        return view('patients.show',compact('patients'));
    }	

}