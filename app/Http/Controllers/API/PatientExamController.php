<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Services\PatientExamService;
use Illuminate\Http\Request;

class PatientExamController extends Controller
{
    public $controllerHelper;

    public function __construct(private PatientExamService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, PatientExamResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $patientExamId){
        return $this->controllerHelper->show($patientExamId);
    }

    /*public function store(PatientExamDTO $patientExamDTO){
        return $this->controllerHelper->store($patientExamDTO);    
    }*/

    public function destroy(int $patientExamId){
        return $this->controllerHelper->destroy($patientExamId);
    }

    /*public function update(int $id, PatientExamDTO $patientExamDTO){
        return $this->controllerHelper->update($id, $patientExamDTO);
    }*/

    public function showByChart(int $chartId){
        $exams = $this->service->showByChart($chartId);
        return response()->json($exams);
    }
}
