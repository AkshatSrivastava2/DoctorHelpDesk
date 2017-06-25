<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

use Session;

use App\History;

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

    public function search(Request $request)
    {
        $search=Patient::all()->where('phone',request('search'))->first();
        if($search)
        {
            $history=History::all()->where('patient_id',$search->id);

            return view('history.show',compact('history'));
        }
        Session::flash('flash_message', 'Phone Number not registered');

        return redirect('/home');
    }	

}