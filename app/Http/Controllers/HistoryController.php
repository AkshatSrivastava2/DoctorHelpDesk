<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

use App\History;

class HistoryController extends Controller
{
    //
    public function update(Patient $patient)
    {
        $this->validate(request(),[
            'history'=>'required|min:6',
            'fee'=>'required',
        ]);
        
        $patient->addHistory(request('history'),request('fee'));

        return back();
    }
    public function show($id)
    {
        $patient=Patient::find($id);

        $history=History::all()->where('patient_id',$id);

        return view('patients.edit',compact('patient','history'));
    }

}
