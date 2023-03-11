<?php
namespace Database\Factories\FactoryUtil;
use App\Enums\Arrival;

class FactoryUtil {

    
    private static function mod( $dividendo, $divisor ) {
        return round( $dividendo - ( floor( $dividendo / $divisor ) * $divisor ) );
    }

    /**
     * Returns a random valid cpf 
     * @reference https://github.com/gilbarbara/cpf-cnpj-generator/blob/master/generator.php
     * @return string 
     */
    static function generateCpf()
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
        $d1 = 11 - (self::mod($d1, 11));
        if ($d1 >= 10) {
            $d1 = 0;
        }
        $d2 = $d1 * 2 + $n9 * 3 + $n8 * 4 + $n7 * 5 + $n6 * 6 + $n5 * 7 + $n4 * 8 + $n3 * 9 + $n2 * 10 + $n1 * 11;
        $d2 = 11 - (self::mod($d2, 11));
        if ($d2 >= 10) {
            $d2 = 0;
        }  
        $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $d1 . $d2;
        return $retorno;
    }

    /**
     * Randomly choses one value from the set of values of a given backed enum.
     * @param class $enum 
     * @return mixed
     */
    static function random_enum($enum){
        $enumValues = array_column($enum::cases(), "value");
        $arrayLength = count($enumValues) - 1;
        $chosenValue = $enumValues[random_int(0, $arrayLength)];
        return $chosenValue;
    }

    static function random_array_element($array){
        $randomIndex = array_rand($array);
        return $array[$randomIndex];
    }
}

?>