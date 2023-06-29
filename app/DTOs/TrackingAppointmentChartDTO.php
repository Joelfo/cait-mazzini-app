3<?php

namespace App\DTOs;

use App\Enums\TrackingAppointmentChartType;
use App\Models\TrackingAppointmentChart;
use App\Models\VitalSignsMeasurement;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;

class TrackingAppointmentChartDTO extends Data
{
    public function __construct(
      #[Vld\Required]
      public readonly string $schema,
      #[Vld\Required]
      public readonly string $conduct,
      #[Vld\Required]
      public readonly string $evolution,
      #[Vld\Required, Vld\Enum(TrackingAppointmentChartType::class)]
      public readonly TrackingAppointmentChartType $type,
      #[Vld\Required]
      public readonly IdModelDTO $vitalSignsMeasurement,
      #[Vld\Required]
      public readonly IdModelDTO $appointment,
      #[Vld\Required]
      public readonly string $appointmentType
    ) 
    {
      
    }

   
}
