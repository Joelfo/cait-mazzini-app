<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation as Vld;

class IdModelDTO extends Data
{
    public function __construct(
      #[Vld\Required]
      public readonly int $id
    ) {}

    public function toModelArray(){
      return $this->toArray();
    }
}
