<?php

namespace Database\Seeders;

use App\Models\TrackingAppointmentChart;
use App\Repositories\PatientExamRepository;
use App\Repositories\PatientRepository;
use App\Repositories\TBAppointmentRepository;
use App\Repositories\VitalSignsMeasurementRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackingAppointmentChartSeeder extends Seeder
{
    public function __construct(
        private TBAppointmentRepository $tbAppointmentRepository,
        private PatientExamRepository $patientExamRepository,
        private VitalSignsMeasurementRepository $vitalSignsMeasurementRepository,
        private PatientRepository $patientRepository
    )
    {

    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = $this->patientRepository->all()->random();
        TrackingAppointmentChart::factory()
            ->count(1)
            ->for($this->tbAppointmentRepository->getById(1))
            ->for($this->vitalSignsMeasurementRepository, 'chart')
            ->for($patient)
            ->for($patient->vitalSignsMeasurements->random())
            ->has($patient->patientExams->random());

            
    }
}
