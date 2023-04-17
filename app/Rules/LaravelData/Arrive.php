<?php

namespace App\Rules\LaravelData;

use Spatie\LaravelData\Support\Validation\ValidationRule;
use App\Rules as Rules;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Arrive extends ValidationRule{
    public function getRules(){
        return [new Arrive()];
    }
}