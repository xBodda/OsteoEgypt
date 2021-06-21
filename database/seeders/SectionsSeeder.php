<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name' => 'Clinic',
        ]);
        DB::table('sections')->insert([
            'name' => 'Osteoegypt',
        ]);
        DB::table('sections')->insert([
            'name' => 'Education',
        ]);
        DB::table('sections')->insert([
            'name' => 'Osteopathy',
        ]);
    }
}
