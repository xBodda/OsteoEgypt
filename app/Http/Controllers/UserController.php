<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function users_table()
    {
        $users = User::with('type')->paginate(15);
        return view('pages.control.view-users',[
            'users' => $users
        ]);
    }
    private function get_user($id){
        if (!Auth::check())
            return false;
        $user = Auth::user();
        if ($id != null) {
            $user = User::find($id);
        }
        if(Auth::user()->id != $id){
            if(Auth::user()->user_type == 1){
                var_dump(2);
                return false;
            }
        }
        return $user;
    }
    public function profile($id = null){
        $user = $this->get_user($id);
        if(!$user){
            return redirect()->route('home');
        }
        return view('pages.profile',['user'=>$user]);
    }

    public function profileAbout($id = null){
        $user = $this->get_user($id);
        if (!$user) {
            return redirect()->route('home');
        }
        return view('pages.profile-about', ['user' => $user]);
    }

    public function profileAppointments($id = null){
        $user = $this->get_user($id);
        if (!$user) {
            return redirect()->route('home');
        }
        return view('pages.profile-appointments', ['user' => $user]);
    }

    public function profilePayment($id = null){
        $user = $this->get_user($id);
        if (!$user) {
            return redirect()->route('home');
        }
        return view('pages.profile-payment', ['user' => $user]);
    }

    public function profileDoctors($id = null){
        $user = $this->get_user($id);
        if (!$user) {
            return redirect()->route('home');
        }
        return view('pages.profile-doctors', ['user' => $user]);
    }

    public function editProfile(){
        return view('pages.edit-profile');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
        return back();
    }
    public function importView() 
    {
        return view('pages.control.import-users');
    }

    public function add_user(Request $request){
        
        return back()->with('success','User added succesfully!');
    }
}
