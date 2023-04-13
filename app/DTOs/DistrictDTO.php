<?php 

namespace App\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;

class DistrictDTO extends Data {
    public function __construct(
        #[Vld\Numeric, Vld\Required]
        public readonly int $id,
        #[Vld\Required, Vld\Between(3, 255)]
        public readonly string $name,
        #[Vld\Required]
        public readonly CityDTO $city
    )
    {
    }

    public function toModelArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'city' => $this->city->toArray()
        ];
    }
}