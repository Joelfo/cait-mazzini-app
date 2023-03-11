<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\HealthUnity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HealthUnitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = District::all();
        HealthUnity::factory(2)
            ->recycle($districts)
            ->create();
    }
}
