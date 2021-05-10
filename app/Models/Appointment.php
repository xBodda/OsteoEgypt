<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'appointment_available_time_id',
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    function appointment_available_time()
    {
        return $this->belongsTo(AppointmentAvailableTime::class);
    }
}
