<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class RelapseReason implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if(!($value >= 0 && $value <= 3)){
            $fail(':attribute deve ter um valor válido.');
        }
    }
}
