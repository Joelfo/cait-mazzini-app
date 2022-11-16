<?php

namespace App\Http\Controllers;


use App\Http\Requests\PatientFormRequest;
use App\Models\Patient;
use App\Repositories\PatientRepository;
use Illuminate\Http\Client\Request;

class PatientController extends Controller
{
    public function __construct(private PatientRepository $repository)
    {
        
    }

    public function index(){
        $patients = Patient::all();
        echo json_encode($patients);
    }

    public function store(PatientFormRequest $request){
        Patient::create($request->all());
        return to_route('patients.index');
    }

    public function destroy(Patient $patient){
        $patient->delete();
        return to_route('patients.index');
    }

    public function update(Patient $patient, PatientFormRequest $request){
        $patient->fill($request->all());
        $patient->save();
        return to_route('patients.index');
    }
}
