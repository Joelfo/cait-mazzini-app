<?php

namespace Database\Seeders;

use App\Enums\Arrival;
use App\Models\City;
use App\Models\District;
use App\Models\HealthUnity;
use App\Models\Nationality;
use App\Models\Patient;
use Database\Factories\FactoryUtil\FactoryUtil;
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

        Patient::factory()
            ->count(10)
            ->sequence(function(){
                $arrival = FactoryUtil::random_enum(Arrival::class);
                $healthUnityId = null;
                if ($arrival == "Referenciado" || $arrival == "Encaminhado"){
                    $healthUnities = HealthUnity::all()->toArray();
                     
                    $chosenIndex = array_rand($healthUnities);
                    $healthUnity = $healthUnities[$chosenIndex]; 
                    $healthUnityId = $healthUnity['id'];
                    //$healthUnityId = $healthUnities[random_int(0, count($healthUnities) - 1)];
                }
                return ['arrival' => $arrival, 'health_unity_id' => $healthUnityId];
            })
            ->create();
    }
}
