<?php

namespace Database\Factories;

use Database\Factories\FactoryUtil\FactoryUtil;
use App\Enums\Arrival;
use App\Enums\BiologicalGender;
use App\Enums\PatientType;
use App\Enums\SpecialPopulation;
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




    /*public function configure(): static {
        return $this->afterMaking(function(Patient $patient){
            if ($patient->arrive == Arrival::Fowarded || $patient->arrive == Arrival::Referenced){
                $healthUnities = HealthUnity::all();
                $patient->healthUnity = $healthUnities[random_int(0, count($healthUnities) - 1)];
                $patient->save();
            }
        });
    }*/


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'sus_card' => strval(random_int(0, 9999)) . strval(random_int(0, 9999)),
            'rg' => strval(random_int(0, 9999)) . strval(random_int(0, 9999)) . strval(random_int(0, 9999)),
            'cpf' => FactoryUtil::generateCpf(),
            'admission_date' => fake()->date(),
            'type' => FactoryUtil::random_enum(PatientType::class),
            'arrival' => FactoryUtil::random_enum(Arrival::class),
            'telephone_1' => "9" . strval(random_int(0, 9999)) . strval(random_int(0, 9999)),
            'telephone_2' => strval(random_int(0, 9999)) . strval(random_int(0, 9999)),
            'cep' => strval(random_int(0, 9999)) . strval(random_int(0, 9999)),
            'is_pregnant' => random_int(0, 1),
            'birth_date' => fake()->date(),
            'record_code' => strval(random_int(0, 9999)) . strval(random_int(0, 9999)),
            'mother_name' => fake()->name(),
            'street' => fake()->streetName(),
            'number' => fake()->numberBetween(1, 100),
            'biological_gender' => FactoryUtil::random_enum(BiologicalGender::class),
            'special_population_type' => FactoryUtil::random_enum(SpecialPopulation::class),
            'birthplace_id' => City::all()->random(),
            'district_id' => District::all()->random(),
            'nationality_id' => Nationality::all()->random()
        ];
    }
}
