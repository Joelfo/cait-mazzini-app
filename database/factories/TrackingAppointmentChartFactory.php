<?php

namespace Database\Factories;

use App\Repositories\PatientRepository;
use App\Repositories\VitalSignsMeasurementRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrackingAppointmentChart>
 */
class TrackingAppointmentChartFactory extends Factory
{
    public function __construct(
        public VitalSignsMeasurementRepository $vitalSignsMeasurementRepository,
        public PatientRepository $patientRepository
        )
    {
        
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => fake()->date('d/m/Y'),
            'schema' => fake()->date('d/m/Y'),
            'evolution' => fake()->text(400),
            'conduct' => fake()->text(250),
            'patient_id' => $this->patientRepository->all(),
            'vital_signs_measurement_id' => $this->vitalSignsMeasurementRepository->all()->random()
        ];
    }
}