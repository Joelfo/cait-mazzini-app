<?php
namespace App\DTOs;

use Spatie\LaravelData\Attributes\Validation as Vld;
use Spatie\LaravelData\Data;
class CityDTO extends Data{

    public function __construct(
        #[Vld\Numeric]
        public readonly int $id,
        #[Vld\Required, Vld\Between]
        public readonly string $name
    )
    {
    }

}