<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentAvailableTime;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        return view('pages.appointment.appointment-booking');
    }

    public function addTimeSlot()
    {
        return view('pages.control.add-appointment-time');
    }

    public function addTimeSlotAction(Request $request){
        $request->validate([
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i'
        ]);
        $combinedDT = date('Y-m-d H:i:s', strtotime($request['appointment_date'] . ' ' . $request['appointment_time']));
        $user = AppointmentAvailableTime::create([
            'appointment_time' => $combinedDT
        ]);

        return redirect()->route('control-add-time')->with('success','Time slot added successfully!');
    }

    public function get_schedueled_appointments()
    {
        $appointments = Appointment::with('appointment_available_time')->with('user')->paginate(15);
        return view('pages.control.appointments', [
            'appointments' => $appointments
        ]);
    }
}
