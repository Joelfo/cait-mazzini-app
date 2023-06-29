<?php
namespace App\Services;

use App\Repositories\PatientRepository;
use App\Repositories\VitalSignsMeasurementRepository;

class VitalSignsMeasurementService extends BaseService
{
    public function __construct(VitalSignsMeasurementRepository $repository, public PatientRepository $patientRepository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
            'pa_mmhg' => $dto->paMmhg,
            'fc_bpm' => $dto->fcBpm,
            'fr_irpm' => $dto->frIrpm,
            'tax_celsius' => $dto->taxCelsius,
            'weight_kg' => $dto->weightKg,
            'height_m' => $dto->heightM,
            'oxygen_saturation_percentage' => $dto->oxygenSaturationPercentage,
            'measurement_date_time' => $dto->measurementDateTime,
            'patient_id' => $dto->patient->id
        ];
    }
}