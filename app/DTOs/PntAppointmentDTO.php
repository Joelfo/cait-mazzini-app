<?php

namespace App\DTOs;

use App\Enums\PntAppointmentType;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;

class PntAppointmentDTO extends Data
{
    public function __construct(
      #[Vld\Required, Vld\Enum(PntAppointmentType::class)]
      public PntAppointmentType $appointmentType,
      public IdModelDTO $patient
    ) {}
}
