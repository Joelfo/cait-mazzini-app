<?php

namespace App\Http\Controllers;


use App\Http\Requests\PatientFormRequest;
use App\Models\Patient;


class PatientController extends Controller
{

    public function index(){
        $patients = Patient::all();
        echo json_encode($patients);
    }

    public function store(PatientFormRequest $request){
        $request->validate();
        Patient::create($request->all());
        return to_route('patients.index');
    }

    public function destroy(PatientFormRequest $request){
        Patient::destroy($request->patient);
        return to_route('patients.index');
    }

    public function update(Patient $patient, PatientFormRequest $request){
        $patient->fill($request->all());
        $patient->save();
        return to_route('patients.index');
    }
}
