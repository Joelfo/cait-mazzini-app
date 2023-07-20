<?php
namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use App\Enums\SexualHabitualLevel;
use Spatie\LaravelData\Attributes\Validation as Vld;
use Spatie\LaravelData\Data;

class LifeHabitsInfoDTO extends Data {
    public function __construct(
        #[VLD\Enum(SexualHabitualLevel::class)]
        public readonly string $sexualHabitualLevel,

        public readonly int $partnersQuantity,

        public readonly bool $usesPreservative,

        public readonly bool $usesPrep,

        public readonly bool $usesContraceptiveMethod,

        #[VLD\Nullable]
        public readonly ?string $sexualHabitsObservation,

        public readonly bool $hasSatisfyingSleeping,

        public readonly int $sleepingHoursPerNight,

        public readonly int $mealsPerDay,

        public readonly int $waterCupsPerDay,

        #[VLD\Nullable]
        public readonly ?string $eatingAndWaterObservation,

        #[VLD\Nullable]
        public readonly ?string $leisureTimeObservation,

        public readonly IdModelDTO $patient
    )
    {
    }
}
