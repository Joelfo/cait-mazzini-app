<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    protected $model = Patient::class;

    /**
     * https://github.com/gilbarbara/cpf-cnpj-generator/blob/master/generator.php
     */
    private function mod( $dividendo, $divisor ) {
        return round( $dividendo - ( floor( $dividendo / $divisor ) * $divisor ) );
    }

    function generateCpf()
    {
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);
        $n7 = rand(0, 9);
        $n8 = rand(0, 9);
        $n9 = rand(0, 9);
        $d1 = $n9 * 2 + $n8 * 3 + $n7 * 4 + $n6 * 5 + $n5 * 6 + $n4 * 7 + $n3 * 8 + $n2 * 9 + $n1 * 10;
        $d1 = 11 - ($this->mod($d1, 11));
        if ($d1 >= 10) {
            $d1 = 0;
        }
        $d2 = $d1 * 2 + $n9 * 3 + $n8 * 4 + $n7 * 5 + $n6 * 6 + $n5 * 7 + $n4 * 8 + $n3 * 9 + $n2 * 10 + $n1 * 11;
        $d2 = 11 - ($this->mod($d2, 11));
        if ($d2 >= 10) {
            $d2 = 0;
        }  
        $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $d1 . $d2;
        return $retorno;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'sus_card' => strval(random_int(0, 9999)) + strval(random_int(0, 9999)),
            'rg' => strval(random_int(0, 9999)) + strval(random_int(0, 9999)) + strval(random_int(0, 9999)),
            'cpf' => $this->generateCpf(),
            'admission_date' => fake()->date(),
            'type' => random_int(0, 3),
            'arrive',
            'telephone_1',
            'telephone_2',
            'cep',
            'pregnant',
            'birth_date',
            'record_code',
            'mother_name',
            'address',
            'health_unity_id',
            'district_id',
            'nationality_id',
            'birthplace_id',
        ];
    }
}
