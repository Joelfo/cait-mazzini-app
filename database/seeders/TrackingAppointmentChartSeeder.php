<?php

namespace Database\Seeders;

use App\Models\TrackingAppointmentChart;
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
        TrackingAppointmentChart::factory()
            ->count(1)
            ->for()
    }
}
