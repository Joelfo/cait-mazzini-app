<?php

namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use App\Enums\Arrival;
use App\Enums\PatientType;
use App\Http\Requests\PatientRequest;
use App\Models\Nationality;
use App\Rules\Cpf;
use App\Rules\LaravelData as CustomVld;

use Spatie\LaravelData\Attributes\Validation as Vld;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class PatientDTO extends Data implements EloquentModelCastable {
    public function __construct(
        #[Vld\Required, Vld\Between(1, 255)]
        public readonly string $name,
        #[Vld\Required, Vld\Between(8, 11)]
        public readonly string $susCard,
        #[Vld\Required, Vld\Between(8, 11)]
        public readonly string $rg,
        #[Vld\Required, Vld\Size(11), Vld\Rule([new Cpf])]
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
        #[Vld\Required, Vld\Size(8)]
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
        public readonly string $address,
        #[Vld\Required]
        public readonly int $districtId,
        #[Vld\Required]
        public readonly int $birthplaceId,
        #[Vld\Required]
        public readonly int $nationalityId,
        #[Vld\Nullable]
        public readonly ?int $healthUnityId
    )
    {
    }

    public function toModelArray()
    {
        return [
            'name' => $this->name,
            'sus_card' => $this->susCard,
            'rg' => $this->rg,
            'cpf' => $this->cpf,
            'admission_date' => $this->admissionDate,
            'record_code' => $this->recordCode,
            'type' => $this->type,
            'arrive' => $this->arrival,
            'telephone_1' => $this->telephone1,
            'telephone_2' => $this->telephone2,
            'cep' => $this->cep,
            'pregnant' => $this->isPregnant,
            'birth_date' => $this->birthDate,
            'mother_name' => $this->motherName,
            'address' => $this->address,
            'district_id' => $this->districtId, 
            'birthplace_id' => $this->birthplaceId,
            'nationality_id' => $this->nationalityId,
            'health_unity_id' => $this->healthUnityId
        ];
    }
}