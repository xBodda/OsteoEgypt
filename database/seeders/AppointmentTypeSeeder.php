<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointment_types')->insert([
            'name' => 'Child Follow Up',
        ]);
        DB::table('appointment_types')->insert([
            'name' => 'Child New Patient',
        ]);
        DB::table('appointment_types')->insert([
            'name' => 'Adult Follow Up',
        ]);
        DB::table('appointment_types')->insert([
            'name' => 'Adult New Patient',
        ]);
    }
}
