<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\PatientExam;
use App\Models\TbAppointment;
use App\Models\TrackingAppointmentChart;
use App\Models\VitalSignsMeasurement;
use App\Repositories\PatientExamRepository;
use App\Repositories\PatientRepository;
use App\Repositories\TBAppointmentRepository;
use App\Repositories\VitalSignsMeasurementRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackingAppointmentChartSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = Patient::all()->random();
        $tbAppointment = TbAppointment::factory()->create(['patient_id' => $patient->id]);
        $vitalSignsMeasurement = VitalSignsMeasurement::factory()->create(['patient_id' => $patient->id]);
        TrackingAppointmentChart::factory()
            ->count(1)
            ->for(TbAppointment::factory()->state(['patient_id' => $patient->id]), 'appointment')
            ->create([
                'patient_id' => $patient->id,
                'vital_signs_measurement_id' => $vitalSignsMeasurement->id,
            ]);         
    }
}
