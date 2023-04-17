<?php

namespace App\Rules\LaravelData;

use Spatie\LaravelData\Support\Validation\ValidationRule;
use App\Rules as Rules;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Cpf extends ValidationRule{
    public function getRules(){
        return [new Cpf()];
    }
}