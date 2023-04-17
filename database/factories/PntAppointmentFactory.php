<?php

namespace Database\Factories;

use App\Enums\PntAppointmentType;
use Database\Factories\FactoryUtil\FactoryUtil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PntAppointment>
 */
class PntAppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'appointment_type' => FactoryUtil::random_enum(PntAppointmentType::class)
        ];
    }
}
