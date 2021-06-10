<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTypeSeeder::class,
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\AppointmentAvailableTime::factory(20)->create();
        \App\Models\Appointment::factory(10)->create();

    }
}
