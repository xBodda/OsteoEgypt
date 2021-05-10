<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentAvailableTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_time',
    ];

    function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
