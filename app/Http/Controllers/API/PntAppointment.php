<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Services\BaseService;
use Illuminate\Http\Request;

class PntAppointment extends Controller
{
    public $controllerHelper;

    public function __construct(private BaseService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, PntAppointmentResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $pntAppointmentId){
        return $this->controllerHelper->show($pntAppointmentId);
    }

    /*public function store(PntAppointmentDTO $pntAppointmentDTO){
        return $this->controllerHelper->store($pntAppointmentDTO);    
    }*/

    public function destroy(int $pntAppointmentId){
        return $this->controllerHelper->destroy($pntAppointmentId);
    }

    /*public function update(int $id, PntAppointmentDTO $pntAppointmentDTO){
        return $this->controllerHelper->update($id, $pntAppointmentDTO);
    }*/
}
