<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;


class PhysicalExamDTO extends Data
{
    public function __construct(
      #[VLD\Nullable]
      public readonly ?string $generalAspect,
      #[VLD\Nullable]
      public readonly ?string $hygieneConditions,
      #[VLD\Nullable]
      public readonly ?string $head,
      #[VLD\Nullable]
      public readonly ?string $neck,
      #[VLD\Nullable]
      public readonly ?string $chest,
      #[VLD\Nullable]
      public readonly ?string $abdomen,
      #[VLD\Nullable]
      public readonly ?string $mmssMmii,
      #[VLD\Nullable]
      public readonly ?string $urinaryTrack,
      #[VLD\Nullable]
      public readonly ?string $skinAndMucous,
      #[VLD\Nullable]
      public readonly IdModelDTO $patient
    ) {}
}
