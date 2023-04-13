<?php 
namespace App\DTOs;

use Spatie\LaravelData\Attributes\Validation as Vld;

class NationalityDTO {
    public function __construct(
        #[Vld\Numeric]
        public readonly int $id,
        #[Vld\Required, Vld\Between(3, 255)]
        public readonly string $name
    )
    {
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}