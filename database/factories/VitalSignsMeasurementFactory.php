<?php

namespace Database\Factories;

use App\Repositories\PatientRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VitalSignsMeasurement>
 */
class VitalSignsMeasurementFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'measurement_date_time' => fake()->dateTime(),
            'pa_mmhg' => fake()->randomNumber(2) . "mm",
            'fc_bpm' => fake()->numberBetween(60, 90) . "bpm",
            'fr_irpm' => fake()->randomNumber(2) . "irpm",
            'tax_celsius' => fake()->randomFloat(1, 35.0, 37.6),
            'oxygen_saturation_percentage' => fake()->randomFloat(2, 92.00, 99.00),
            'weight_kg' => fake()->randomFloat(2, 45.00, 120.00),
            'height_m' => fake()->randomFloat(2, 1.45, 1.85)
        ];
    }
}
