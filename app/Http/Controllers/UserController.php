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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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

    public function profileBadges($id = null){
        $user = $this->get_user($id);
        if (!$user) {
            return redirect()->route('home');
        }
        return view('pages.profile-badges', ['user' => $user]);
    }

    public function editProfile(){
        return view('pages.edit-profile');
    }
    
    public function gallery(){
        return view('pages.gallery');
    }

    public function videosGallery(){
        return view('pages.videos-gallery');
    }


    public function editProfileSecurity(){
        return view('pages.edit-profile-security');
    }

    public function editProfilepersonalize(){
        return view('pages.edit-profile-personalize');
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
            $max_width = 300;
            $width = Image::make($image)->width();
            $height = Image::make($image)->height(); 
            $new_height = $max_width * $height / $width;
            if($new_height > 600){
                $new_height = 600;
            }
            Image::make($image)->resize($max_width, $new_height)->save( public_path('/storage/images/' . $imageName ) );
            $user->image = $imageName;
        }
        

        $user->save();    	  	

        return back()->with('success','Your info has been updated successfully!');

    }

    public function changePassword(Request $request) {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|current_password',
            'new-password' => 'required|min:6|max:64|confirmed|different:current_password|regex:/((?=.*[0-9])(?=.*[a-zA-Z]).{8,64})/u',
            'new-password_confirmation' => 'required',
        ],
        [
            'current_password.current_password' => 'Password doesn\'t match your current password',
            'new-password.different' => 'New Password cannot be same as your current password',
            'new-password.regex' => 'Make sure it\'s at least 8 characters including a letter & a number.',
        ]);
        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }


        $user = Auth::user();
        $user->password = bcrypt($request['new-password']);
        $user->save();

        return back()->with("success","Password changed successfully !");
    }
}
