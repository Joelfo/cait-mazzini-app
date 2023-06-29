<?php

namespace App\DTOs;

use DateTime;
use DateTimeInterface;
use Illuminate\Support\Facades\Date;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;

class VitalSignsMeasurementDTO extends Data
{
    public function __construct(
      #[Vld\Required]
      public readonly string $fcBpm,
      #[Vld\Required]
      public readonly string $paMmhg,
      #[Vld\Required]
      public readonly string $frIrpm,
      #[Vld\Required]
      public readonly string $taxCelsius,
      #[Vld\Required]
      public readonly string $oxygenSaturationPercentage,
      #[Vld\Required]
      public readonly string $weightKg,
      #[Vld\Required]
      public readonly string $heightM,
      #[Vld\Required, Vld\DateFormat(DATE_ATOM)]
      public readonly string $measurementDateTime,
      #[Vld\Required]
      public readonly IdModelDTO $patient
    ) 
    {
    }
}
