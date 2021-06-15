<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AppointmentAvailableTime;
use App\Models\AppointmentType;
use App\Models\Branch;
use App\Models\User;

class AppointmentAvailableTimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppointmentAvailableTime::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'appointment_time' => $this->faker->dateTimeBetween('-30 days','+30 days'),
            'doctor_id' => User::select('id')->where('user_type','=',2)->inRandomOrder()->first()->id,
            'appointment_type_id' => AppointmentType::all()->random()->id,
            'branch_id' => Branch::all()->random()->id,
        ];
    }
}
