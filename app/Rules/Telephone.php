<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Telephone implements InvokableRule
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
        /*
        if($this->validateTelephone($value) == false){
            $fail('O valor de :attribute precisa ser válido');
        }
        */
    }

    /**
     * Extracted from stack overflow(https://pt.stackoverflow.com/a/144364)
     * 
     * Check if a given telephone number is valid.
     * 
     * @param string $number
     * @return boolean 
     */
    public function validateTelephone($telefone){
        $telefone= trim(str_replace('/', '', str_replace(' ', '', str_replace('-', '', str_replace(')', '', str_replace('(', '', $telefone))))));

        $regexTelefone = "^[0-9]{11}$";

        //$regexCel = '/[0-9]{2}[6789][0-9]{3,4}[0-9]{4}/'; // Regex para validar somente celular
        if (preg_match($regexTelefone, $telefone)) {
            return true;
        }else{
            return false;
        }
    }
}
