<?php 
namespace App\DTOs;

class NationalityDTO {
    public function __construct(
        public readonly int $id,
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