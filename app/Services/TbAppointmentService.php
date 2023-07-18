<?php
namespace App\Services;

use App\Models\TrackingAppointmentChart;
use App\Repositories\TbAppointmentRepository;

class TbAppointmentService extends BaseService
{
    public function __construct(TbAppointmentRepository $repository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
          'appointment_type' => $dto->appointmentType,
          'patient_id' => $dto->patient->id
        ];
    }
}
