<?php
namespace App\Services;

use App\Repositories\TrackingAppointmentChartRepository;

class TrackingAppointmentChartService extends BaseService
{
    public function __construct(TrackingAppointmentChartRepository $repository){
        $this->setRepository($repository);
    }
}