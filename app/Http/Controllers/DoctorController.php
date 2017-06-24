<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;

class DoctorController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }
    public function create()
    {
    	$doctors=Doctor::all();

    	return view('doctors.create',compact('doctors'));
    }
    public function store()
    {
    	$this->validate(request(),[
    		'name'=>'required|min:6',
    		'qualification'=>'required',
    		'phone'=>'required',
            'gender'=>'required'

    	]);
    	Doctor::create([
    		'name'=>request('name'),
    		'qualification'=>request('qualification'),
    		'phone'=>request('phone'),
            'gender'=>request('gender')
    	]);

    	return back();
    }
}
