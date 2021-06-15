<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentAvailableTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_time',
        'doctor_id',
        'branch_id',
        'appointment_type_id',
    ];

    function appointment()
    {
        return $this->hasOne(Appointment::class);
    }

    function type()
    {
        return $this->belongsTo(AppointmentType::class,'appointment_type_id');    
    }

    function doctor()
    {
        return $this->belongsTo(User::class);    
    }

    function branch()
    {
        return $this->belongsTo(User::class);    
    }
    
}
