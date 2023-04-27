<?php

namespace Database\Factories;

use Database\Factories\FactoryUtil\FactoryUtil;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\TbAppointmentType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TbAppointment>
 */
class TbAppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'appointment_type' => FactoryUtil::random_enum(TbAppointmentType::class),
            'patient_id' => 1
        ];
    }
}
