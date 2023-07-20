<?php
namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use Spatie\LaravelData\Attributes\Validation as Vld;
use Spatie\LaravelData\Data;

class NurseryIdentificationInfoDTO extends Data {
    public function __construct(
        #[Vld\Required]
        public readonly string $civilState,
        #[Vld\Required]
        public readonly string $color,
        #[Vld\Required]
        public readonly string $homeType,
        #[Vld\Required]
        public readonly string $homePropertyType,
        #[VLD\Required]
        public readonly string $scholarity,
        #[VLD\Required]
        public readonly string $ocupation,
        #[VLD\Required]
        public readonly bool $hasPotableWater,
        #[VLD\Required]
        public readonly bool $hasBasicSanitation,
        #[VLD\Required]
        public readonly bool $hasUrbanCleaningServices,
        #[VLD\Required]
        public readonly string $religion,
        #[VLD\Required]
        public readonly int $childrenNumber,
        #[VLD\Required]
        public readonly string $gender,
        #[VLD\Required]
        public readonly IdModelDTO $patient,
        #[VLD\Required]
        public readonly string $incomeSource,
        #[VLD\Nullable]
        public readonly ?string $otherIncomeSource,
        #[VLD\Required]
        public readonly bool $isSpouseAHousemate,
        #[VLD\Required]
        public readonly bool $isParentAHousemate,
        #[VLD\Required]
        public readonly bool $isChildrenAHousemate,
        #[VLD\Nullable]
        public readonly ?string $otherHousemates


    )
    {
    }
}
