<?php

namespace Database\Seeders;

use App\Models\VitalSignsMeasurement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VitalSignsMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VitalSignsMeasurement::factory()->count(1);
    }
}
