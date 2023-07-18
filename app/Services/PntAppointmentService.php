<?php
namespace App\Services;

use App\Repositories\PntAppointmentRepository;

class PntAppointmentService extends BaseService
{
    public function __construct(PntAppointmentRepository $repository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
            'patient_id' => $dto->patient->id,
            'appointment_type' => $dto->appointmentType
        ];
    }

}
