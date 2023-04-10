<?php

namespace App\DTOs;

use App\Enums\Arrival;
use App\Enums\PatientType;
use App\Http\Requests\PatientRequest;
use App\Models\Nationality;

class PatientDTO {
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $susCard,
        public readonly string $rg,
        public readonly string $cpf,
        public readonly string $admissionDate,
        public readonly PatientType $type,
        public readonly Arrival $arrive,
        public readonly string $telephone1,
        public readonly string $telephone2, 
        public readonly string $cep,
        public readonly bool $isPregnant,
        public readonly string $birthDate,
        public readonly string $recordCode,
        public readonly string $motherName,
        public readonly DistrictDTO $district,
        public readonly CityDTO $birthplace,
        public readonly NationalityDTO $nationality,
        public readonly HealthUnityDTO $healthUnity
    )
    {
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'sus_card' => $this->susCard,
            'rg' => $this->rg,
            'cpf' => $this->cpf,
            'admission_date' => $this->admissionDate,
            'type' => $this->type,
            'arrive' => $this->arrive,
            'telephone_1' => $this->telephone1,
            'telephone_2' => $this->telephone2,
            'cep' => $this->cep,
            'is_pregnant' => $this->isPregnant,
            'birth_date' => $this->birthDate,
            'mother_name' => $this->motherName,
            'district' => $this->district->toArray(), 
            'birthplace' => $this->birthplace->toArray(),
            'nationality' => $this->nationality->toArray(),
            'healthUnity' => $this->healthUnity->toArray()
        ];
    }
}