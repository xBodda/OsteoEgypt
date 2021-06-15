<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appointment;
use App\Models\User;
use App\Models\AppointmentAvailableTime;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::select('id')->where('user_type','=',1)->inRandomOrder()->first()->id,
            'appointment_available_time_id' => AppointmentAvailableTime::all()->random()->id,
        ];
    }
}
