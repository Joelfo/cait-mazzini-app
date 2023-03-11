<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use App\Models\HealthUnity;
use App\Models\Nationality;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $birthplaces = City::all();
        $healthUnities = HealthUnity::all();
        $districts = District::all();
        $nationalities = Nationality::all();

        Patient::factory()
            ->count(10)
            ->recycle($birthplaces)
            ->recycle($healthUnities)
            ->recycle($districts)
            ->recycle($nationalities)
            ->create();
    }
}
