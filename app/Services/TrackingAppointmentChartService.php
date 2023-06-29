<?php
namespace App\Services;

use App\Models\PntAppointment;
use App\Models\TbAppointment;
use App\Models\TrackingAppointmentChart;
use App\Repositories\PatientRepository;
use App\Repositories\PntAppointmentRepository;
use App\Repositories\TbAppointmentRepository;
use App\Repositories\TrackingAppointmentChartRepository;
use App\Repositories\VitalSignsMeasurementRepository;

class TrackingAppointmentChartService extends BaseService
{
    public function __construct(
        TrackingAppointmentChartRepository $repository, 
        public VitalSignsMeasurementRepository $vitalSignsMeasurementRepository,
        public PatientRepository $patientRepository,
        public TbAppointmentRepository $tbAppointmentRepository,
        public PntAppointmentRepository $pntAppointmentRepository
        ){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        $attributes = [
            'schema' => $dto->schema,
            'conduct' => $dto->conduct,
            'evolution' => $dto->evolution,
            'type' => $dto->type,
            'vital_signs_measurement_id' => $dto->vitalSignsMeasurement->id,
            'patient' => $dto->patient->id,
            'appointment_type' => $dto->appointmentType,
            'appointment_id' => $dto->appointment->id
        ];

        return $attributes;
    }
}