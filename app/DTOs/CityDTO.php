<?php
namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use Spatie\LaravelData\Attributes\Validation as Vld;
use Spatie\LaravelData\Data;
class CityDTO extends Data {

    public function __construct(
        #[Vld\Required, Vld\Between(3, 255)]
        public readonly string $name
    )
    {
    }

    public function toModelArray(){
        return [
            'name' => $this->name
        ];
    }
}
