<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

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
    public function edit($id)
    {
        $patient=Patient::find($id);

        return view('patients.edit',compact('patient'));
    }

}
