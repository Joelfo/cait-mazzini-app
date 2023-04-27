<?php

namespace Database\Seeders;

use App\Models\TbAppointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PntAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TbAppointment::factory()->count(1)->create();
    }
}
