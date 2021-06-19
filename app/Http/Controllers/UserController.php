<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use Image;

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

    public function profileDoctors(){
        return view('pages.profile-doctors');
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

    public function saveEditProfile(Request $input) {

        $this->validate($input, [
        'fname' => 'required|max:255'      
            ]);

        $user = User::find(Auth::user()->id);
        $user->name = $input["fname"].' '.$input["lname"];
        $user->email = $input["email"];
        $user->gender = $input["gender"];
        $user->birth_date = $input["dob"];
        $user->phone = $input["mobile"];

        if($input->hasFile('image')){
            $imageName = time().'.'.$input->file('image')->extension();
            $image = $input->file('image');
            Image::make($image)->resize(300, 300)->save( public_path('/storage/images/' . $imageName ) );
            $user->image = $imageName;
        }
        

        $user->save();    	  	

        return redirect('profile/about');

    }
}
