<?php

namespace Database\Factories;

use App\Repositories\PatientRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PatientExam>
 */
class PatientExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'file_path' => fake()->filePath(),
            'date' => fake()->date('d/m/Y')
        ];
    }
}
