<?php 

namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;

class DistrictDTO extends Data {
    public function __construct(
        #[Vld\Required, Vld\Between(3, 255)]
        public readonly string $name,
        #[Vld\Required]
        public readonly IdModelDTO $city
    )
    {
    }
    
}