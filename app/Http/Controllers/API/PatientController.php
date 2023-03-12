<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseAPIController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\ControllerHelper;
use App\Http\Requests\PatientRequest;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends 
Controller
{
    private ControllerHelper $controllerHelper;

    public function __construct(private PatientService $service)
    {
        $this->controllerHelper = new ControllerHelper($service, PatientResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $patientId){
        return $this->controllerHelper->show($patientId);
    }

    public function store(PatientRequest $request){
        return $this->controllerHelper->store($request);    
    }

    public function destroy(int $patientId){
        return $this->controllerHelper->destroy($patientId);
    }

    public function update(int $id, PatientRequest $request){
        return $this->controllerHelper->update($id, $request);
    }

    public function showByHealthUnity(int $healthUnityId){
        $patients = $this->service->showByHealthUnity($healthUnityId);
        return response()->json($patients);
    }

}
