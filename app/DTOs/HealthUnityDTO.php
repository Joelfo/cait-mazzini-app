<?php 

namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use Spatie\LaravelData\Attributes\Validation as Vld;
use Spatie\LaravelData\Data;

class HealthUnityDTO extends Data implements EloquentModelCastable{
    public function __construct(
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
            'name' => $this->name,
            'district' => $this->district->toArray()
        ];
    }
}