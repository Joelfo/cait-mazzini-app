<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Services\TrackingAppointmentChartService;
use Illuminate\Http\Request;

class TrackingAppointmentChartController extends Controller
{
    public $controllerHelper;

    public function __construct(private TrackingAppointmentChartService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, TrackingAppointmentChartResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $trackingAppointmentChartId){
        return $this->controllerHelper->show($trackingAppointmentChartId);
    }

    /*public function store(TrackingAppointmentChartDTO $trackingAppointmentChartDTO){
        return $this->controllerHelper->store($trackingAppointmentChartDTO);    
    }*/

    public function destroy(int $trackingAppointmentChartId){
        return $this->controllerHelper->destroy($trackingAppointmentChartId);
    }

    /*public function update(int $id, TrackingAppointmentChartDTO $trackingAppointmentChartDTO){
        return $this->controllerHelper->update($id, $trackingAppointmentChartDTO);
    }*/
}
