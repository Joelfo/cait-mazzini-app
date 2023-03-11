<?php

namespace Database\Factories;

use App\Models\District;
use Database\Factories\FactoryUtil\FactoryUtil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HealthUnity>
 */
class HealthUnityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->company(),
            "district_id" => District::all()->random()
        ];
    }
}
