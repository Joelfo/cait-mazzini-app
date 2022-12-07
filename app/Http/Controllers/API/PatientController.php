<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use App\Repositories\PatientRepository;
use Illuminate\Http\Client\Request;

class PatientController extends Controller
{
    public function __construct(private PatientRepository $repository)
    {
        
    }

    public function index(){
        return response()
            ->json($this->repository->all(), 200);
        
    }

    public function store(PatientRequest $request){
        return response()
            ->json($this->repository->create($request->all()), 201);
        
    }

    public function destroy(Patient $patient){
        return $this->repository->delete($patient);
        
    }

    public function update(Patient $patient, PatientRequest $request){
        return $this->repository->update($patient, $request->all());
        
    }
}
