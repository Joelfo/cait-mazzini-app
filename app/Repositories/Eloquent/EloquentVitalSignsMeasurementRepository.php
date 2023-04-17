<?php
namespace App\Repositories\Eloquent;

use App\Models\VitalSignsMeasurement;
use App\Repositories\VitalSignsMeasurementRepository;

class EloquentVitalSignsMeasurementRepository extends EloquentBaseRepository implements VitalSignsMeasurementRepository {
    public function __construct()
    {
        parent::__construct(VitalSignsMeasurement::class);
    }

}
