<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\HealthUnity;
use App\Models\Nationality;
use App\Models\VitalSignsMeasurement;
use App\Repositories\TBAppointmentRepository;
use Database\Factories\NationalityFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NationalitySeeder::class,
            CitySeeder::class,
            DistrictSeeder::class,
            HealthUnitySeeder::class,
            PatientSeeder::class
        ]);
    }
}
