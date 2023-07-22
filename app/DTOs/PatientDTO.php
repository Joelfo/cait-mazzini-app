<?php

namespace App\DTOs;

use App\DTOs\Interfaces\EloquentModelCastable;
use App\Enums\Arrival;
use App\Enums\PatientType;
use App\Enums\SpecialPopulation;
use App\Http\Requests\PatientRequest;
use App\Models\Nationality;
use App\Rules\Cpf;
use App\Rules\LaravelData as CustomVld;

use Spatie\LaravelData\Attributes\Validation as Vld;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

/**
 * @OA\Schema(
 *   schema="Patient",
 *   description="Um modelo de paciente",
 *   @OA\Property(property="id", type="number", example="29"),
 *   @OA\Property(property="name", type="string", example="Moisés"),
 *   @OA\Property(property="susCard", type="string", example="12345678"),
 *   @OA\Property(property="rg", type="string", example="123456789"),
 *   @OA\Property(property="cpf", type="string", example="12345678910"),
 *   @OA\Property(property="admissionDate", type="string", example="11-11-2020"),
 *   @OA\Property(property="type", type="string", example="TB"),
 *   @OA\Property(property="arrival", type="string", example="Referenciado"),
 *   @OA\Property(property="telephone1", type="string", example="21999999999"),
 *   @OA\Property(property="telephone2", type="string", example="2155555555"),
 *   @OA\Property(property="cep", type="string", example="21111050"),
 *   @OA\Property(property="isPregnant", type="bool", example="false"),
 *   @OA\Property(property="birthDate", type="string", example="21-02-1954"),
 *   @OA\Property(property="recordCode", type="string", example="TB99999"),
 *   @OA\Property(property="motherName", type="string", example="Rute"),
 *   @OA\Property(property="address", type="string", example="Rua do Nunca, número 999, apartamento 1851"),
 *   @OA\Property(property="district", @OA\Property(property="id", type="number", example="2")),
 *   @OA\Property(property="birthplace", @OA\Property(property="id", type="number", example="3")),
 *   @OA\Property(property="nationality", @OA\Property(property="id", type="number", example="1")),
 *   @OA\Property(property="healthUnity", @OA\Property(property="id", type="number", example="6"))
 * )
 */
class PatientDTO extends Data {
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
        #[Vld\Nullable, Vld\Numeric]
        public readonly ?string $telephone2,
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
        public readonly string $street,
        #[Vld\Required]
        public readonly string $number,
        #[Vld\Nullable]
        public readonly ?string $complement,
        #[Vld\Required, Vld\Enum(SpecialPopulation::class)]
        public readonly string $specialPopulation,
        #[Vld\Nullable]
        public readonly ?string $otherSpecialPopulation,
        #[Vld\Required]
        public readonly string $biologicalGender,
        #[Vld\Required]
        public readonly IdModelDTO $district,
        #[Vld\Required]
        public readonly string $birthplace,
        #[Vld\Required]
        public readonly IdModelDTO $nationality,
        #[Vld\Nullable]
        public readonly ?IdModelDTO $healthUnity
    )
    {

    }
}
