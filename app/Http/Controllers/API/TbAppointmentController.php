<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Services\BaseService;
use App\Services\TbAppointmentService;
use Illuminate\Http\Request;

class TbAppointmentController extends Controller
{
    public $controllerHelper;

    public function __construct(private TbAppointmentService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, TbAppointmentResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $tbAppointmentId){
        return $this->controllerHelper->show($tbAppointmentId);
    }

    /*public function store(TbAppointmentDTO $tbAppointmentDTO){
        return $this->controllerHelper->store($tbAppointmentDTO);    
    }*/

    public function destroy(int $tbAppointmentId){
        return $this->controllerHelper->destroy($tbAppointmentId);
    }

    /*public function update(int $id, TbAppointmentDTO $tbAppointmentDTO){
        return $this->controllerHelper->update($id, $tbAppointmentDTO);
    }*/
}
