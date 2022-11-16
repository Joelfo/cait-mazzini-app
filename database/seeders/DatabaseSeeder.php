<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('nationalities')->insert([
            'name' => 'Brasileiro'
        ]);
        
        DB::table('cities')->insert([
            'name' => 'Niteroi'
        ]);

        DB::table('districts')->insert([
            'name' => 'Centro',
            'city_id' => 1
        ]);

        DB::table('health_unities')->insert([
            'name' => 'HUAP',
            'district_id' => '1'
        ]);

    }
}
