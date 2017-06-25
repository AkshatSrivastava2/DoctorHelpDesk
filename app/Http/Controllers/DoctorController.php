<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;

use Session;

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
            'gender'=>request('gender'),
            'user_id'=>auth()->id()
    	]);

    	return back();
    }
    public function show($id)
    {
        $doctor=Doctor::find($id);

        return view('doctors.show',compact('doctor'));
    }

    public function update(Request $request,$id)
    {

        $this->validate(request(),[
            'name'=>'required|min:6',
            'qualification'=>'required',
            'phone'=>'required',
            'gender'=>'required'

        ]);

        $doctor=Doctor::find($id);

        $doctorUpdate=request()->all();

        $doctor->fill($doctorUpdate)->save();

        Session::flash('flash_message', 'Details added successfully!');

        return back();

    }
    public function destroy($id)
    {
        Doctor::find($id)->delete();


        //Session::flash('flash_message', 'Doctor deleted!');

        return redirect('/');
    }
}
