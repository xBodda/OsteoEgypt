<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            'name' => 'El Tagamo\'',
        ]);
        DB::table('branches')->insert([
            'name' => 'Maadi',
        ]);
        DB::table('branches')->insert([
            'name' => 'Mohandseen',
        ]);
        
    }
}
