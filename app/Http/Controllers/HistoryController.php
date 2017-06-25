<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

use App\History;

use App\Doctor;

class HistoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Patient $patient)
    {
        $this->validate(request(),[
            'history'=>'required|min:6',
            'fee'=>'required',
            'id'=>'required'
        ]);
        
        $patient->addHistory(request('history'),request('fee'),request('id'));

        return back();
    }
    public function show($id)
    {
        $patient=Patient::find($id);

        $history=History::all()->where('patient_id',$id);

        $doctors=Doctor::all();

        return view('patients.edit',compact('patient','history','doctors'));
    }

}
