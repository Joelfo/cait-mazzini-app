<?php 

namespace App\DTOs;

use Spatie\LaravelData\Attributes\Validation as Vld;

class HealthUnityDTO {
    public function __construct(
        #[Vld\Numeric]
        public readonly int $id,
        #[Vld\Required, Vld\Between(3, 255)]
        public readonly string $name,
        #[Vld\Required]
        public readonly DistrictDTO $district
    )
    {
    }

    public function toModelArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'district' => $this->district->toArray()
        ];
    }
}