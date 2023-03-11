<?php

namespace Database\Factories;

use Database\Factories\FactoryUtil\FactoryUtil;
use App\Enums\Arrival;
use App\Enums\Type;
use App\Models\City;
use App\Models\District;
use App\Models\HealthUnity;
use App\Models\Nationality;
use App\Models\Patient;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    protected $model = Patient::class;

    

    
    public function configure(): static {
        return $this->afterMaking(function(Patient $patient){
            if ($patient->arrive == Arrival::Fowarded || $patient->arrive == Arrival::Referenced){
                $healthUnities = HealthUnity::all();
                $patient->healthUnity = $healthUnities[random_int(0, count($healthUnities) - 1)];
            }
        });
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
            'cpf' => FactoryUtil::generateCpf(),
            'admission_date' => fake()->date(),
            'type' => FactoryUtil::random_enum(Type::class),
            'arrival' => FactoryUtil::random_enum(Arrival::class),
            'telephone_1' => "9" + strval(random_int(0, 9999)) + strval(random_int(0, 9999)),
            'telephone_2' => strval(random_int(0, 9999)) + strval(random_int(0, 9999)),
            'cep' => strval(random_int(0, 9999)) + strval(random_int(0, 9999)),
            'pregnant' => random_int(0, 1),
            'birth_date' => fake()->date(),
            'record_code' => strval(random_int(0, 9999)) + strval(random_int(0, 9999)),
            'mother_name' => fake()->name(),
            'address' => fake()->address(),
            'birthplace_id' => City::all()->random(),
            'district_id' => District::all()->random(),
            'nationality_id' => Nationality::all()->random()
        ];
    }
}
