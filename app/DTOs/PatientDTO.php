<?php

namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use App\Enums\Arrival;
use App\Enums\PatientType;
use App\Http\Requests\PatientRequest;
use App\Models\Nationality;
use App\Rules\LaravelData as CustomVld;

use Spatie\LaravelData\Attributes\Validation as Vld;
use Spatie\LaravelData\Data;

class PatientDTO extends Data implements EloquentModelCastable {
    public function __construct(
        #[Vld\Numeric]
        public readonly int $id,
        #[Vld\Required, Vld\Between(1, 255)]
        public readonly string $name,
        #[Vld\Required, Vld\Between(8, 11)]
        public readonly string $susCard,
        #[Vld\Required, Vld\Between(8, 11)]
        public readonly string $rg,
        #[Vld\Required, Vld\Size(11), CustomVld\Cpf]
        public readonly string $cpf,
        #[Vld\Required, Vld\DateFormat('d/m/Y')]
        public readonly string $admissionDate,
        #[Vld\Required, Vld\Enum(PatientType::class)]
        public readonly PatientType $type,
        #[Vld\Required, Vld\Enum(Arrival::class)]
        public readonly Arrival $arrival,
        #[Vld\Required, Vld\Numeric]
        public readonly string $telephone1,
        #[Vld\Required, Vld\Numeric]
        public readonly string $telephone2, 
        #[Vld\Required, Vld\Numeric, Vld\Size(8)]
        public readonly string $cep,
        #[Vld\Required, Vld\BooleanType]
        public readonly bool $isPregnant,
        #[Vld\Required, Vld\DateFormat('d/m/Y')]
        public readonly string $birthDate,
        #[Vld\Required]
        public readonly string $recordCode,
        #[Vld\Nullable, Vld\Between(1, 255)]
        public readonly string $motherName,
        #[Vld\Required]
        public readonly DistrictDTO $district,
        #[Vld\Required]
        public readonly CityDTO $birthplace,
        #[Vld\Required]
        public readonly NationalityDTO $nationality,
        public readonly HealthUnityDTO $healthUnity
    )
    {
    }

    public function toModelArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'sus_card' => $this->susCard,
            'rg' => $this->rg,
            'cpf' => $this->cpf,
            'admission_date' => $this->admissionDate,
            'type' => $this->type,
            'arrive' => $this->arrival,
            'telephone_1' => $this->telephone1,
            'telephone_2' => $this->telephone2,
            'cep' => $this->cep,
            'is_pregnant' => $this->isPregnant,
            'birth_date' => $this->birthDate,
            'mother_name' => $this->motherName,
            'district' => $this->district->toModelArray(), 
            'birthplace' => $this->birthplace->toModelArray(),
            'nationality' => $this->nationality->toModelArray(),
            'healthUnity' => $this->healthUnity->toModelArray()
        ];
    }
}