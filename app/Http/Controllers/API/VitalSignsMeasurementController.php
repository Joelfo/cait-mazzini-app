<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Resources\VitalSignsMeasurementResource;
use App\Services\VitalSignsMeasurementService;
use Illuminate\Http\Request;

class VitalSignsMeasurementController extends Controller
{
    public $controllerHelper;

    public function __construct(private VitalSignsMeasurementService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, VitalSignsMeasurementResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $vitalSignsMeasurementId){
        return $this->controllerHelper->show($vitalSignsMeasurementId);
    }

    /*public function store(VitalSignsMeasurementDTO $vitalSignsMeasurementDTO){
        return $this->controllerHelper->store($vitalSignsMeasurementDTO);    
    }*/

    public function destroy(int $vitalSignsMeasurementId){
        return $this->controllerHelper->destroy($vitalSignsMeasurementId);
    }

    /*public function update(int $id, VitalSignsMeasurementDTO $vitalSignsMeasurementDTO){
        return $this->controllerHelper->update($id, $vitalSignsMeasurementDTO);
    }*/

    
}
