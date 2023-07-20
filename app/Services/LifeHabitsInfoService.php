<?php
namespace App\Services;

use App\Repositories\LifeHabitsInfoRepository;

class LifeHabitsInfoService extends BaseService
{
    public function __construct(LifeHabitsInfoRepository $repository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
            'sexual_habitual_level' => $dto->sexualHabitualLevel,
            'partners_quantity' => $dto->partnersQuantity,
            'uses_preservative' => $dto->usesPreservative,
            'uses_prep' => $dto->usesPrep,
            'uses_contraceptive_method' => $dto->usesContraceptiveMethod,
            'sexual_habits_observation' => $dto->sexualHabitsObservation,
            'has_satisfying_sleeping' => $dto->hasSatisfyingSleeping,
            'sleeping_hours_per_night' => $dto->sleepingHoursPerNight,
            'meals_per_day' => $dto->mealsPerDay,
            'water_cups_per_day' => $dto->waterCupsPerDay,
            'eating_and_water_observation' => $dto->eatingAndWaterObservation,
            'leisure_time_observation' => $dto->leisureTimeObservation,
            'patient_id' => $dto->patient->id
        ];
    }
}
