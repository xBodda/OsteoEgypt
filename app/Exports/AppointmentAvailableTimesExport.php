<?php

namespace App\Exports;

use App\Models\Appointment;
use App\Models\AppointmentAvailableTime;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AppointmentAvailableTimesExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ids = Appointment::select('appointment_available_time_id');
       
        return AppointmentAvailableTime::with('doctor:id,name')->
        with('branch:id,name')->
        with('type:id,name')->
        with('type:id,name')->
        with('appointment.user')->
        get();
    }

    public function map($time): array
    {
        $doctor = "";
        $branch = "";
        $type = "";
        $patient = "";
        if(is_null($time->doctor)){
            $doctor= "N/A";
        }else{
            $doctor = $time->doctor->name;
        }

        if(is_null($time->branch)){
            $branch= "N/A";
        }else{
            $branch = $time->branch->name;
        }
        
        if(is_null($time->type)){
            $type = "N/A";
        }else{
            $type = $time->type->name;
        }

        if(is_null($time->appointment)){
            $patient = "N/A";
        }else{
            $patient = $time->appointment->user->name;
        }

        return [
            $time->id,
            $doctor,
            $branch,
            $type,
            $patient,
            $time->appointment_time,
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Doctor',
            'Branch',
            'Type',
            'Patient Name',
            'Date & Time',
        ];
    }

}
