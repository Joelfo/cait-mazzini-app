<?php 

namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;

class DistrictDTO extends Data implements EloquentModelCastable{
    public function __construct(
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
            'name' => $this->name,
            'city' => $this->city->toArray()
        ];
    }
}