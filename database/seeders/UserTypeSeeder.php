<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'Patient',
        ]);
        DB::table('user_types')->insert([
            'name' => 'Doctor',
        ]);
        DB::table('user_types')->insert([
            'name' => 'Receptionist',
        ]);
        DB::table('user_types')->insert([
            'name' => 'Admin',
        ]);
    }
}
