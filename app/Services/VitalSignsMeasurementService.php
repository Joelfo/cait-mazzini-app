<?php
namespace App\Services;

use App\Repositories\VitalSignsMeasurementRepository;

class VitalSignsMeasurementService extends BaseService
{
    public function __construct(VitalSignsMeasurementRepository $repository){
        $this->setRepository($repository);
    }
}