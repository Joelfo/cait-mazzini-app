<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Type implements InvokableRule
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
        if(!($value >= 0 && $value <= 2)){
            $fail(':attribute must contain a valid value.');
        }
    }
}