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
        $response = $this->repository->all();
        echo json_encode($response);
    }

    public function store(PatientFormRequest $request){
        $response = $this->repository->create($request->all());
        echo json_encode($response);
    }

    public function destroy(Patient $patient){
        $response = $this->repository->delete($patient);
        echo json_encode($response);
    }

    public function update(Patient $patient, PatientFormRequest $request){
        $response = $this->repository->update($patient, $request->all());
        echo json_encode($response);
    }
}
