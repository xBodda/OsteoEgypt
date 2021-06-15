<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
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

    public function profile(){
        return view('pages.profile');
    }

    public function profileAbout(){
        return view('pages.profile-about');
    }

    public function profileAppointments(){
        return view('pages.profile-appointments');
    }

    public function profilePayment(){
        return view('pages.profile-payment');
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
