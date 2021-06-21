<?php

namespace App\Http\Controllers;

use App\Exports\AppointmentAvailableTimesExport;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentAvailableTime;
use App\Models\AppointmentType;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AppointmentController extends Controller
{
    public function index(){
        $branches = Branch::get();
        $types = AppointmentType::get();
        $doctors = User::where('user_type','=',2)->get();
        
        $data = [
                "branches"=>$branches,
                "types"=>$types,
                "doctors"=>$doctors];


        return view('pages.appointment.appointment-booking',$data);
    }
    
    public function submit(Request $request){
        
        $request->validate([
            'date' => 'required|integer',
            'notes' => 'nullable'
        ]);

        return back()->with("success","Success, you've booked your appointment. We will contact you as soon as possible ");
    }

    public function addTimeSlot()
    {
        $branches = Branch::get();
        $types = AppointmentType::get();
        $doctors = User::where('user_type','=',2)->get();
        
        $data = [
                "branches"=>$branches,
                "types"=>$types,
                "doctors"=>$doctors];

        return view('pages.control.add-appointment-time', $data);
    }

    public function addTimeSlotAction(Request $request){

        $request->validate([
            'doctor' => 'required|exists:users,id',
            'branch' => 'required|exists:branches,id',
            'type' => 'required|exists:appointment_types,id',
            'appointment_date' => 'required|array',
            'appointment_time' => 'required|array',
            'appointment_date.*' => 'required|date',
            'appointment_time.*' => 'required|date_format:H:i',
        ]);

        for($i=0; $i<count($request['appointment_date']); $i++){
            $date = $request['appointment_date'][$i];
            $time = $request['appointment_time'][$i];
            $combinedDT = date('Y-m-d H:i:s', strtotime($date . ' ' . $time));

            $appointment = AppointmentAvailableTime::create([
                'appointment_time' => $combinedDT,
                'doctor_id' => $request['doctor'],
                'branch_id' => $request['branch'],
                'appointment_type_id' => $request['type'],
            ]);
            
        }

        return redirect()->route('control-add-time')->with('success','Time slot added successfully!');
    }

    public function get_schedueled_appointments()
    {
        $appointments = Appointment::with('appointment_available_time')->with('user')->paginate(15);
        return view('pages.control.appointments', [
            'appointments' => $appointments
        ]);
    }

    public function ViewAvailableTimeSlots()
    {
        $time_slots = AppointmentAvailableTime::with('appointment')->with('doctor:id,name,image')->with('branch')->with('type')->paginate(15);
        return view('pages.control.appointment-slots', [
            'slots' => $time_slots
        ]);
    }

    public function export() 
    {
        return Excel::download(new AppointmentAvailableTimesExport, 'Available_time_slots' . date('Y-m-d H-i-s') . '.xlsx');
    }
    public function importExportView(){
        
        return view('pages.control.import-export-times');
    }
}
