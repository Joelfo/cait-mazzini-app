<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();
        echo json_encode($patients);
    }

    public function store(Request $request){
        Patient::create($request->all());
        return to_route('patients.index');
    }

    public function destroy(Request $request){
        //var_dump($request->patient);
        Patient::destroy($request->patient);
        return to_route('patients.index');
    }
}
