<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\AppointmentAvailableTime;
use App\Models\AppointmentType;
use App\Models\Branch;
use App\Models\User;

class BookOnSpotController extends Controller
{

    public function bookOnSpot_first_step()
    {
        return view('pages.control.book-on-spot.phone-number');
    }

    public function bookOnSpot_search_phone_number(Request $request)
    {
        $user = User::where('phone','=',$request['phone'])->first();
        if($user){
            $user_data = $user;
        }
        else{
            $user_data = (object)array('phone' => $request['phone']);
        }
        $branches = Branch::get();
        $types = AppointmentType::get();
        $doctors = User::where('user_type', '=', 2)->get();

        $data = [
            "branches" => $branches,
            "types" => $types,
            "doctors" => $doctors,
            "user"=>$user_data,
        ];
        return view('pages.control.book-on-spot.index', $data);
    }


    public function bookOnSpot(Request $request)
    {
        if($request['user_id'] == 0){
            $request->validate(
                [
                    'name'=>'required|string|min:6|max:60',
                    'date' => 'required|integer',
                    'phone' => 'required|string|min:11|max:11',
                ]
                );

            $user = User::create([
                'name' => $request['name'],
                'email' => null,
                'password' => null,
                'user_type' => 1,
                'image' => 'default.jpg',
                'birth_date' => null,
                'gender' => $request['gender'],
                'phone' => $request['phone'],
            ]);
        }else{
            $user = User::find($request['user_id']);
        }

        Appointment::create(
            [
                'user_id'=>$user->id,
                'appointment_available_time_id'=>$request['date']
            ]
        );

        return redirect()->route('book-on-spot')->with('success','Record has been added succesffully!');
    }

}
