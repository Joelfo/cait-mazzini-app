<?php

namespace App\DTOs;

use App\Enums\TbAppointmentType;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;

class TbAppointmentDTO extends Data
{
    public function __construct(
      #[Vld\Required, Vld\Enum(TbAppointmentType::class)]
      public TbAppointmentType $appointmentType,
      public IdModelDTO $patient
    ) {}
}
