<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;


class PhysicalExamDTO extends Data
{
    public function __construct(
      public string $generalAspect,
      public string $hygieneConditions,
      public string $head,
      public string $neck,
      public string $chest,
      public string $abdomen,
      public string $mmssMmii,
      public string $urinaryTrack,
      public string $skinAndMucous,
      public IdModelDTO $patient
    ) {}
}
