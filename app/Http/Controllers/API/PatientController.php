<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Services\PatientService;


class PatientController extends Controller
{
    public function __construct(private PatientService $service)
    {
        
    }

    public function index(){
        return response()
            ->json($this->service->index(), 200);
        
    }

    public function show(int $patientId){
        return response()->json($this->service->show($patientId), 200);
    }

    public function store(PatientRequest $request){
        return response()
            ->json($this->service->store($request->all()), 201);
        
    }

    public function destroy(int $patientId){
        $this->service->destroy($patientId);
        return response()->noContent();
        
    }

    public function update(int $id, PatientRequest $request){
        return response()->json($this->service->update($id, $request->all()), 200);
    }

}
