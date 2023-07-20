<?php
namespace App\Services;

use App\Models\TrackingAppointmentChart;
use App\Repositories\PhysicalExamRepository;

class PhysicalExamService extends BaseService
{
    public function __construct(PhysicalExamRepository $repository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
          'general_aspect' => $dto->generalAspect,
          'hygiene_conditions' => $dto->hygieneConditions,
          'head' => $dto->head,
          'neck' => $dto->neck,
          'chest' => $dto->chest,
          'abdomen' => $dto->abdomen,
          'mmss_mmii' => $dto->mmssMmii,
          'urinary_track' => $dto->urinaryTrack,
          'skin_and_mucous' => $dto->skinAndMucous,
          'patient_id' => $dto->patient->id
        ];
    }
}
