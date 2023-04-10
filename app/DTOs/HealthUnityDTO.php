<?php 

namespace App\DTOs;

class HealthUnityDTO {
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly DistrictDTO $district
    )
    {
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'district' => $this->district->toArray()
        ];
    }
}