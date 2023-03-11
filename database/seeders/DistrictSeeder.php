<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();
        District::factory()
            ->count(5)
            ->recycle($cities)
            ->create();
    }
}
